<style>
.product_Box{
    float: left;
    width: 200px;
    height: 300px;
    background-color: cornflowerblue;
    margin: 10px;

}

.row{
    overflow: hidden;
}
</style>
<?php
for ($a = 1; $a <= 12; $a++)
{
    if ($a % 4 == 1)
    {
        echo "<div class = 'row'>";
    }

    if ($a % 4 == 0)
    {
        echo "<div class ='Product_Box'>Product", $a, "</div>";
        echo "</div>";
    }
    else
    {
        echo "<div class ='Product_Box'>Product", $a, "</div>";
    }
}
