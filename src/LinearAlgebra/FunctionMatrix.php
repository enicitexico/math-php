<?php
namespace MathPHP\LinearAlgebra;

class FunctionMatrix extends Matrix
{
    /**
     * Evaluate
     *
     * @param array $params
     *
     * @return Matrix
     */
    public function evaluate(array $params): Matrix
    {
        $m = $this->m;
        $n = $this->n;
        $R = [];
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $func = $this->A[$i][$j];
                $R[$i][$j] = $func($params);
            }
        }
        return MatrixFactory::create($R);
    }
}
