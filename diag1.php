<?php

include "index.php";

$selection= "SELECT
    eleves_competences.eleves_id,
    eleves_competences.competences_id,
    eleves_competences.niveau, 
    eleves_competences.niveau_ae, 
    eleves.id
    
    FROM
    eleves_competences
   

    INNER JOIN
    eleves

    ON 

    eleves.id= eleves_competences.eleves_id
    
    WHERE
    eleves.id=1

";

$sel = $conn->query($selection);

$Tab=[];

while($row = $sel->fetch_assoc()) {
    array_push($Tab, $row);

}

/*
echo $Tab[0]["niveau"];

echo"<pre>";
print_r($Tab);
echo"</pre>";


//return $Tab;
*/

?>

<!DOCTYPE html>
<html>
<head>
    <script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
    <script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script></head>


<style>


        html, body {
            height:100%;
            width:100%;
        }
        #myChart {
            height:100%;
            width:100%;
            min-height:250px;
        }
        .zc-ref {
            display:none;
        }


    </style>
<body>
<div id='myChart'><a class="zc-ref" href="https://www.zingchart.com/">Powered by ZingChart</a></div>

<script>


    var myConfig = {
        type : 'radar',
        plot : {
            aspect : 'area',
            animation: {
                effect:3,
                sequence:1,
                speed:700
            }
        },
        scaleV : {
            visible : false
        },
        scaleK : {
            values : '0:3:1',
            labels : ['HTML','CSS','Javascript','PHP'],
            item : {
                fontColor : '#607D8B',
                backgroundColor : "white",
                borderColor : "#aeaeae",
                borderWidth : 1,
                padding : '5 10',
                borderRadius : 10
            },
            refLine : {
                lineColor : '#c10000'
            },
            tick : {
                lineColor : '#59869c',
                lineWidth : 2,
                lineStyle : 'dotted',
                size : 20
            },
            guide : {
                lineColor : "#607D8B",
                lineStyle : 'solid',
                alpha : 0.3,
                backgroundColor : "#c5c5c5 #718eb4"
            }
        },
        series : [
            {
                values :[
                    <?php echo$Tab[0]["niveau"]?>,
                    <?php echo$Tab[1]["niveau"]?>,
                    <?php echo$Tab[2]["niveau"]?>,
                    <?php echo$Tab[3]["niveau"]?>
                ],

                text:''
            },
            {
                values :[
                    <?php echo$Tab[0]["niveau_ae"]?>,
                    <?php echo$Tab[1]["niveau_ae"]?>,
                    <?php echo$Tab[2]["niveau_ae"]?>,
                    <?php echo$Tab[3]["niveau_ae"]?>
                ],

                lineColor : '#53a534',
                backgroundColor : '#689F38'
            }
        ]
    };

    zingchart.render({
        id : 'myChart',
        data : myConfig,
        height: '100%',
        width: '100%'
    });



</script>
</body>
</html>

