<?php

class NaughtsAndCrosses
{
    /**
     * @param string The game board representation in JSON
     * @return string The winning player ('X' or 'O')
     */
    public function getResults(string $gameBoard): string
    {
        $gameArr = json_decode($gameBoard);
        $boardWidth = count($gameArr[0]);
        $boardHeight = count($gameArr);

        for ($row=0;$row<count($gameArr);$row++){
            
            for ($column=0;$column<count($gameArr[$row]);$column++){                             
                
                //distance from current slot to board edges
                $top = $row - 0;
                $right = $boardWidth - 1 - $column;
                $bottom = $boardHeight - 1 - $row;
                $left = $column - 0;
                //check horizontally
                if ($right>=2) {
                    if (
                        $gameArr[$row][$column]==$gameArr[$row][$column+1]
                        && $gameArr[$row][$column]==$gameArr[$row][$column+2]
                        && $gameArr[$row][$column]!='E'
                    ) {
                        return $gameArr[$row][$column];
                    }
                }
                //check vertically
                if ($bottom>=2) {
                    if (
                        $gameArr[$row][$column]==$gameArr[$row+1][$column]
                        && $gameArr[$row][$column]==$gameArr[$row+2][$column]
                        && $gameArr[$row][$column]!='E'
                    ) {
                        return $gameArr[$row][$column];
                    }
                }
                //check diagonally
                if ($right>=2 && $bottom>=2){
                    if (
                        $gameArr[$row][$column]==$gameArr[$row+1][$column+1] 
                        && $gameArr[$row][$column]==$gameArr[$row+2][$column+2] 
                        && $gameArr[$row][$column]!='E'){
                        return $gameArr[$row][$column];
                    }
                }
                //check diagonally
                if ($left>=2 && $bottom>=2) {
                    if (
                        $gameArr[$row][$column]==$gameArr[$row+1][$column-1] 
                        && $gameArr[$row][$column]==$gameArr[$row+2][$column-2] 
                        && $gameArr[$row][$column]!='E') {
                        return $gameArr[$row][$column];
                    }
                }
            }
        }
        //return E if draw
        return 'E';
    }
}


$input = '[
    ["X", "X", "O"],
    ["E", "O", "O"],
    ["O", "E", "O"]
  ]';


$test = new NaughtsAndCrosses();

echo $test->getResults($input);