
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="tableStyle.css?v=<?php echo time();?>"> 
    </head>
    <body>
           <!--===========Nav Bar=================-->
           <Section Class="Nav-Bar">
            <Div Class="Logo"> AL-Hasa Tour</Div>
            <Ul Class="Menu">
                <Li><A Href="HOME.php">Home</A></Li>
            </Ul>
            </Div>

        </Section>

        <script>
    const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

const numBalls = 50;
const balls = [];

for (let i = 0; i < numBalls; i++) {
let ball = document.createElement("div");
ball.classList.add("ball");
ball.style.background = colors[Math.floor(Math.random() * colors.length)];
ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
ball.style.transform = `scale(${Math.random()})`;
ball.style.width = `${Math.random()}em`;
ball.style.height = ball.style.width;

balls.push(ball);
document.body.append(ball);
}

// Keyframes
balls.forEach((el, i, ra) => {
let to = {
  x: Math.random() * (i % 2 === 0 ? -11 : 11),
  y: Math.random() * 12
};

let anim = el.animate(
  [
    { transform: "translate(0, 0)" },
    { transform: `translate(${to.x}rem, ${to.y}rem)` }
  ],
  {
    duration: (Math.random() + 1) * 2000, // random duration
    direction: "alternate",
    fill: "both",
    iterations: Infinity,
    easing: "ease-in-out"
  }
);
});
  </script>

        <!---->
        <div class="form">
            <?php
            include "connection.php";

            if(isset($_GET["textBox"])){
    
                $type = $_GET["textBox"];
                $sql= "SELECT * from tour where Type=?";
                
                $stmt = $conn->prepare($sql); 
                $stmt->bind_param("s",$type);                 
                $stmt->execute();
                $result= $stmt->get_result();
                
                echo "<table border=5px class='head'> <tr class='th'><th>NAME</th> <th>TIME</th><th>LOCATION</th><th>DESCRIPTION</th></tr>";
                
                while($row=$result->fetch_assoc()){
                   ;
                    echo "<tr><td class='bold'>".$row["Name"]."</td><td class='wid'>".$row["Time"]."</td><td class='wid'><a href=".$row['Loaction']."><img src='location.png' width='35px' height='35px'></a></td><td>".$row["Description"]."</td></tr>";

                }
                echo "</table>";
                //$row=$result->fetch_assoc();
                //echo $row["Name"];

                
    
                //return $result;
    
            };
               
            ?> 
           

                
            
        </div>
    </body>
</html>


