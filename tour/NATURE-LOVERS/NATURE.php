<!DOCTYPE Html>
<Html Lang="En">

<Head>
    <Meta Charset="UTF-8" />
    <Meta Http-Equiv="X-UA-Compatible" Content="IE=Edge" />
    <Meta Name="Viewport" Content="Width=Device-Width, Initial-Scale=1.0" />
    <Link Rel="Stylesheet" Href="NatureStyle.css" />
    <Title>Nature Lovers</Title>
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
            <Div Class="Logo"><img src="tree.png" width="45px" height="45px"> NATURE LOVERS</Div>
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
                <td>Ain Najm Park</td>
                <td><a href="https://goo.gl/maps/sXNXHktMCDjVmbD28"><img src="location.png" alt="" width="35px" height="35px"></a></td>
                <td>10:00 AM</td>
                <td><ul><li>Shopping</li> <li>Healing by Water</li></ul></td>
              </tr>
                 <tr>
                  <td>Shaibani Park</td>
                  <td><a href="https://goo.gl/maps/xxVzjWzGnpBT5hjy6"><img src="location.png" alt="" width="35px" height="35px"></a></td>
                  <td>4:00 PM</td>
                  <td><ul><li>Walking</li> <li>Amusement Games</li></ul></td>
                
              </tr>
                 <tr>
                  <td>King Abdullah Environmental Park</td>
                  <td><a href="https://goo.gl/maps/yDU98KeQHhFpwms39"><img src="location.png" alt="" width="35px" height="35px"></a></td>
                  <td>8:00 PM</td>
                  <td><ul><li>Fountain</li> <li>Playground</li></ul></td>
  
              </tr>
                 <tr>
                  <td>Al-Asfar Lake</td>
                  <td><a href="https://goo.gl/maps/AJh6Wy2raQJ4dKkY8"><img src="location.png" alt="" width="35px" height="35px"></a></td>
                  <td>5:00 AM/PM</td>
                  <td><ul><li>Watching sunrise</li> <li>Watching sunset</li></ul></td>
                
              </tr>
            </tbody>
          </thead>
        
        
      


        
        
    </Body>

</Html>
</Body>

</Html>