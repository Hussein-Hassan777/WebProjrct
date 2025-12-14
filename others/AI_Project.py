class Tic_Tac_Toe:

    def __init__(self):
        self.initial_grid = [
            [" ", " ", " "],
            [" ", " ", " "],
            [" ", " ", " "],
        ]

    # --------------------------------------------------------------------------------------------
    def display_grid(self, state):
        print()
        for row in range(3):
            for col in range(3):
                print(' ', state[row][col], ' ', sep='', end='')
                if col < 2:
                    print('|', end='')
            print()
            if row < 2:
                print('---+---+---', end='')
            print()
        print()

    # --------------------------------------------------------------------------------------------
    def take_action(self, current_state, action):
        # Create a deep copy of the state
        new_state = [[" ", " ", " "] for _ in range(3)]

        for row in range(3):
            for col in range(3):
                new_state[row][col] = current_state[row][col]

        player, row, col = action
        new_state[row][col] = player
        return new_state

    # --------------------------------------------------------------------------------------------
    def current_player(self, state):
        count_X, count_O = 0, 0

        for row in range(3):
            for col in range(3):
                if state[row][col] == 'X':
                    count_X += 1
                elif state[row][col] == 'O':
                    count_O += 1

        return 'X' if count_X == count_O else 'O'

    # --------------------------------------------------------------------------------------------
    def check_terminal(self, current_state):
        terminal = False
        full = False
        player = None

        # Check rows
        for row in range(3):
            if (
                current_state[row][0]
                == current_state[row][1]
                == current_state[row][2]
                != " "
            ):
                terminal = True
                player = current_state[row][0]
                break

        # Check columns
        for col in range(3):
            if (
                current_state[0][col]
                == current_state[1][col]
                == current_state[2][col]
                != " "
            ):
                terminal = True
                player = current_state[0][col]
                break

        # Check diagonals
        if (
            current_state[0][0]
            == current_state[1][1]
            == current_state[2][2]
            != " "
        ):
            terminal = True
            player = current_state[0][0]

        if (
            current_state[0][2]
            == current_state[1][1]
            == current_state[2][0]
            != " "
        ):
            terminal = True
            player = current_state[0][2]

        # Check draw
        empty_count = 0
        for row in range(3):
            for col in range(3):
                if current_state[row][col] == " ":
                    empty_count += 1

        if empty_count == 0:
            full = True

        if terminal:
            return 1 if player == 'X' else -1
        elif full:
            return 0
        else:
            return "Not terminal"

    # --------------------------------------------------------------------------------------------
    def available_actions(self, current_state):
        actions = []
        player = self.current_player(current_state)

        for row in range(3):
            for col in range(3):
                if current_state[row][col] == " ":
                    actions.append((player, row, col))

        return actions

    # --------------------------------------------------------------------------------------------
    def MinMax(self, current_state):
        terminal_check = self.check_terminal(current_state)
        if terminal_check != "Not terminal":
            return terminal_check

        utility_values = []

        for action in self.available_actions(current_state):
            next_state = self.take_action(current_state, action)
            utility_values.append(self.MinMax(next_state))

        return max(utility_values) if self.current_player(current_state) == 'X' else min(utility_values)

    # --------------------------------------------------------------------------------------------
    def human_play(self, current_state):
        self.display_grid(current_state)
        player = self.current_player(current_state)
        print(f"Your turn, you are playing with {player}")

        row, column = map(int, input("Choose your action, row column respectively: ").split())
        action = (player, row, column)

        new_state = self.take_action(current_state, action)
        self.display_grid(new_state)
        return new_state

    # --------------------------------------------------------------------------------------------
    def computer_play(self, current_state):
        player = self.current_player(current_state)
        print(f"Computer turn, he is playing with {player}")

        actions = self.available_actions(current_state)
        next_states = [self.take_action(current_state, action) for action in actions]
        utility_values = [self.MinMax(state) for state in next_states]

        best_value = min(utility_values)
        index = utility_values.index(best_value)

        _, row, col = actions[index]
        print(f"Computer decided to play in {row} and {col}")

        new_state = self.take_action(current_state, actions[index])
        self.display_grid(new_state)
        return new_state


# ========================= Testing the Game =========================
my_game = Tic_Tac_Toe()
my_grid = [row.copy() for row in my_game.initial_grid]

while my_game.check_terminal(my_grid) == "Not terminal":
    print("________________________________________________")

    my_grid = my_game.human_play(my_grid)
    result = my_game.check_terminal(my_grid)
    if result != "Not terminal":
        print("You won !" if result == 1 else "You lost !" if result == -1 else "Draw !")
        break

    my_grid = my_game.computer_play(my_grid)
    result = my_game.check_terminal(my_grid)
    if result != "Not terminal":
        print("You won !" if result == 1 else "You lost !" if result == -1 else "Draw !")
        break