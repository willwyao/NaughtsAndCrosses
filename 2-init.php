<?php
    
$game = new NaughtsAndCrosses();

 /* Enter your code here. */
    
    
class NaughtsAndCrosses
{
    /**
     * @param string The game board representation in JSON
     * @return string The winning player ('X' or 'O')
     */
    public function getResults(string $gameBoard): string
    {
        // Implement solution
    }
}
// IO

//test 0
[
  ["X", "X", "X"],
  ["E", "O", "O"],
  ["O", "O", "X"]
]

//test 2
[
  ["X", "O", "X"],
  ["E", "O", "O"],
  ["O", "O", "X"]
]

