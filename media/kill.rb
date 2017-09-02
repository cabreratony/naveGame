require 'chingu'
include Gosu

class Game < Chingu::Window
	def initialize
		super
		self.caption = "Juego de Toniess"
		@player = Player.create(:x => 200, :y => 200)
		@player.input = [  :holding_left, :holding_right, :holding_up, :holding_down, :space]
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

Game.new.show


#https://www.youtube.com/watch?v=jQf-cJP-Gvg
#https://www.youtube.com/watch?v=cZvDSuQug24