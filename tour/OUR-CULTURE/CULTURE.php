<!DOCTYPE Html>
<Html Lang="En">

<Head>
    <Meta Charset="UTF-8" />
    <Meta Http-Equiv="X-UA-Compatible" Content="IE=Edge" />
    <Meta Name="Viewport" Content="Width=Device-Width, Initial-Scale=1.0" />
    <Link Rel="Stylesheet" Href="CultureStyle.css" />
    <Title>Our Culture Our Pride</Title>
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
            <Div Class="Logo"><img src="IMG_8788.PNG" width="45px" height="45px"> OUR CULTURE OUR PRIDE</Div>
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
                <td>Ibrahim Palace</td>
                <td><a href="https://goo.gl/maps/U3Uz6YMzmeVbSfnFA"><img src="location.png" alt="" width="35px" height="35px"></a></td>
                <td>10:00 AM</td>
                <td><ul><li>Gain historical knowledge</li> <li>Examine old furniture</li></ul></td>
                
              </tr>
                 <tr>
                  <td>Al-Qara Hill</td>
                  <td><a href="https://goo.gl/maps/bQgtCpppKxZJBnDF9"><img src="location.png" alt="" width="35px" height="35px"></a></td>
                  <td>12:00 PM</td>
                  <td><ul><li>explore the area</li> <li>buy souvenir</li></ul></td>
                
              </tr>
                 <tr>
                <td>Jawatha Mosque</td>
                <td><a href="https://goo.gl/maps/gynWFPEfpLeWS6e56"><img src="location.png" alt="" width="35px" height="35px"></a></td>
                <td>2:00 PM</td>
                <td><ul><li>see the first Mosque in middle east</li>
                <li>walk in the park</li></ul></td>
                
              </tr>
                 <tr>
                <td>Empty Quarter</td>
                <td><a href="https://goo.gl/maps/YLata2LT2NhYKD1B7"><img src="location.png" alt="" width="35px" height="35px"></a></td>
                <td>4:00 PM</td>
                <td><ul><li>⚠️ You must go with a guide!</li><li>drifting on the sand</li> <li>motorcycle</li></ul></td>
                
              </tr>
            </tbody>
          </thead>
        
        
      


        
        
    </Body>

</Html>
</Body>

</Html>