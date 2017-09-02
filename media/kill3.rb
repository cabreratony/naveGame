require 'chingu'
include Gosu

class Game < Chingu::Window
	def initialize
		super
		self.caption = "Juego de nave Toniess"
		self.input = {:escape => :exit}
		push_game_state(Inicio)
		
	end

end

class Player < Chingu::GameObject

	traits :collision_detection, :bounding_circle

	def initialize(options = {})
		super		
		@image = Image["rocket.png"]
	end

	def holding_left
		@x -= 3
	end

	def holding_right
		@x += 3
	end

	def holding_up
		@y -= 3
	end

	def holding_down
		@y += 3
	end

	def space
		Bullet.create(:x=> @x, :y => @y)
		Bullet.create(:x=> @x - 20, :y => @y)
		Bullet.create(:x=> @x + 20, :y => @y)
	end

end

class Meteor < Chingu::GameObject

	traits :velocity, :collision_detection, :bounding_circle
	def initialize(options = {})
		super
		@image = Image["salva.png"]
		self.velocity_x = rand(-1..1)
		self.velocity_y = rand(-1..1)
	end
	
	def update
		if @x < 0 || @x > $window.width
			@x %= $window.width
		end

		if @y < 0 || @y > $window.height
			@y %= $window.height
		end
	end

end



class Bullet < Chingu::GameObject

	traits :collision_detection, :bounding_circle

	def initialize(options = {})
		super
		@image = Image["bullet_yellow.png"]
	end

	def update
		@y -= 5
		if outside_window?
			self.destroy
		end
	end
end


class Inicio < Chingu::GameState
	def initialize
		super
		Chingu::Text.create(:text => "ORPIME F1 PARA INICIAR EL JUEGO", :x => 200, :y => $window.height/2, :size => 30)
		self.input = {:F1 => Play}
	end
end


class Play < Chingu::GameState
	def initialize
		super
		Chingu::Text.create(:text => "ANTONIO CABRERA CANO", :x => 200, :y => 10, :size => 30)
		@player = Player.create(:x => 200, :y => 200)
		@player.input = [  :holding_left, :holding_right, :holding_up, :holding_down, :space]
		self.input = {:p => Pause, :r => :reset_game}
		4.times { Meteor.create(:x => rand($window.width), :y => rand($window.height)) }
	end

	def reset_game
		Meteor.destroy_all
		Bullet.destroy_all
		@player.x = $window.width/2
		@player.y = $window.height * 0.95
		4.times { Meteor.create(:x => rand($window.width), :y => rand($window.height)) }
	end

	def update
		super
		Bullet.each_collision(Meteor) do |bullet, meteor| bullet.destroy; meteor.destroy; end
		Player.each_collision(Meteor) do |player, meteor| push_game_state(Lose) end
	end
end

class Lose < Chingu::GameState
 	def initialize
 		super
 		Chingu::Text.create(:text => "LO SIENTO PERDISTE :C", :size => 30, :y => $window.height/2, :x => 200)
 		self.input = {:c => lambda{ Meteor }}
 	end
end



class Pause < Chingu::GameState
	def initialize
		super
		self.input = {:p => :sinpause}		
	end

	def sinpause
		pop_game_state
	end

	def draw
		super
		previuos_game_state.draw
	end
end

Game.new.show


#https://www.youtube.com/watch?v=jQf-cJP-Gvg
#https://www.youtube.com/watch?v=cZvDSuQug24