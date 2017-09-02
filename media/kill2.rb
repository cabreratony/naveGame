require 'chingu'
include Gosu

class Game < Chingu::Window
	def initialize
		super
		self.caption = "Juego de Toniess"
		self.input = {:escape => :exit}
		push_game_state(Inicio)
		
	end

end

class Player < Chingu::GameObject
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

class Bullet < Chingu::GameObject

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
		Chingu::Text.create(:text => "ORPIME F1 PARA CONTINUAR", :x => 200, :y => $window.height/2, :size => 30)
		self.input = {:F1 => Play}
	end
end


class Play < Chingu::GameState
	def initialize
		super
		@player = Player.create(:x => 200, :y => 200)
		@player.input = [  :holding_left, :holding_right, :holding_up, :holding_down, :space]
		self.input = {:p => Pause, :r => :reset_game}
	end

	def reset_game
		Bullet.destroy_all
		@player.x = $window.width/2
		@player.y = $window.height * 0.95
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