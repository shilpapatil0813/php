<form method="post">
    enter a starting number:<input type="text">
    name="t1"><br><br>
    enter a ending number:<input type="text">
    name="t2"><br><br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
function primenumber($MyNum)
{
    $n=0
    if($MyNum==2||$MyNum==3)
    {
        echo $MyNum."";
    }
    else if($MyNum%6==1||MyNum%6==5)
    {
        for($i=2;$i*$i<=MyNum;$i++)
        {
            if($MyNum%$i==0)
            {
                $n++;
                break;
            }
        }
        if($n==0)
        {
            echo $MyNum."";
        }
    }
}
if(isset($_POST['submit']))
{
    $x=$_POST['t1'];$y=$_POST['t2'];
    echo"primenumberbetween".$x." and".$y."are:<br>";
    for($i=$x;$i<$y+1;$i++)
    {
        primenumber($i);
    }
}
?>        
    echo"file name"
    
