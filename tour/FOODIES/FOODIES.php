<!DOCTYPE Html>
<Html Lang="En">

<Head>
    <Meta Charset="UTF-8" />
    <Meta Http-Equiv="X-UA-Compatible" Content="IE=Edge" />
    <Meta Name="Viewport" Content="Width=Device-Width, Initial-Scale=1.0" />
    <Link Rel="Stylesheet" Href="FoodiesStyle.css" />
    <Title>Foodies</Title>

    
</Head>

<Body>
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

    <Body>

        <!--===========Nav Bar=================-->
        <Section Class="Nav-Bar">
            <Div Class="Logo"><img src="food.png" width="45px" height="45px"> Foodies</Div>
            <Ul Class="Menu">
                <Li><A Href="../HOME.php">Home</A></Li>
            </Ul>
            </Div>

        </Section>

        <!---->
        
            <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Time</th>
                <th>ِActivities</th>
                
              </tr>
            <thead>
            <tbody>
              <tr>
                <td>Fatte w Snobar</td>
                <td><a href="https://goo.gl/maps/vPRgjUFCvGH3WgVY8"><img src="location.png"alt="" width="35px" height="35px"></a></td>
                <td>8:00 AM</td>
                <td><ul><li>Breakfast</li> <li>Tea</li> <li>Coffee</li></ul></td>
                
              </tr>
                 <tr>
                <td>Bharat</td>
                <td><a href="https://goo.gl/maps/2und9zZ5vkyHE12z8"><img src="location.png"alt="" width="35px" height="35px"></a></td>
                <td>1:00 PM</td>
                <td><ul><li>Lunch</li> <li>Indian Dessert</li></ul></td>
                
              </tr>
                 <tr>
                <td>Erbil</td>
                <td><a href="https://goo.gl/maps/1ucyb3LXE8QjWuNQ9"><img src="location.png"alt="" width="35px" height="35px"></a></td>
                <td>9:00 PM</td>
                <td><ul><li>Dinner</li> <li>Salad</li> <li>Drink</li> </ul></td>
                
              </tr>
                 <tr>
                <td>Soulaf</td>
                <td><a href="https://goo.gl/maps/8FZ8474E2xUTkLKb9"><img src="location.png"alt="" width="35px" height="35px"></a></td>
                <td>11:00 PM</td>
                <td><ul><li>Gelato</li></ul></td>
                
              </tr>
            </tbody>
          </thead>
        
    
      


        
        
    </Body>

</Html>
</Body>

</Html>