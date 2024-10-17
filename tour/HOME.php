<!DOCTYPE Html>
<Html Lang="En">

<Head>
    <Meta Charset="UTF-8" />
    <Meta Http-Equiv="X-UA-Compatible" Content="IE=Edge" />
    <Link Rel="Stylesheet" Href="HomeStyle.Css" />
    <Title>AL-Hasa Tour </Title>
</Head>

<Body>

    <Body>

        <!--===========Nav Bar=================-->
        <Section Class="Nav-Bar">
            <Div Class="Logo">AL-Hasa Tour</Div>
            <Ul Class="Menu">
                <Li><A Href="HOME.php">Home</A></Li>
                <Li><A Href="#places">Explore</A></Li>
                <Li><A Href="#about">About Us</A></Li>
            </Ul>
            </Div>

        </Section>
        <!--===============Banner================-->
        <Section Class="Banner">
            <Div Class="Banner-Text-Item">
                <Div Class="Banner-Heading">
                    <H1>Find Your Next Tour!</H1>
                </Div>
                <Form Class="Form"  action="fetchData.php" method="GET" >
                    <Input Type="Text" List="Mylist" Placeholder="Where Would You Like To Go?" name="textBox">
                    <Datalist Id="Mylist" name="list">
                        <Option>Resturnat</Option>
                        <Option>Cafe </Option>
                        <Option>Mountain</Option>
                        <Option>Park</Option>
                        <Option>Site</Option>
                        <Option>Beach</Option>
                    </Datalist>
                    <Input Type="Date" Class="Date">
                    <input type="submit" value = "Go" Class="Book"/> <A Href="#" ></A>
                </Form>
            </Div>
        </Section>
        


        <!--==============Places===================-->
        <Section Class="Places" id="places">
            <Div Class="Places-Text">
                <Small>BEGIN EXPLORING BY</Small>
                <H2>Categories</H2>
            </Div>

            <Div Class="Cards">
                <!------  CARD 1  ------>
                <Div Class="Card"> 
                    <Div Class="Zoom-Img">
                        <Div Class="Img-Card">
                            <Img Src="IMG_8768.PNG">
                        </Div>
                    </Div>

                    <Div Class="Text">
                        <H2>Cafes & Resturnats</H2>
                        <P Class="desc">The city's best flavours & vibrant neighborhoods await you </P>
                        <Div Class="Card-Box">
                            <P Class="Location"><a href="C&R/C&R.php"><img src="Arrow.PNG" width="15%" height="15%"></a></P>
                        </Div>
                    </Div>

                </Div>
                <!------  CARD 2  ------>
                <Div Class="Card">
                    <Div Class="Zoom-Img">
                        <Div Class="Img-Card">
                            <Img Src="map.png">
                        </Div>
                    </Div>

                    <Div Class="Text">
                        <H2>Archaeological Sites</H2>
                        <P Class="desc">Experience the rich history of Al-Hasa and discover areas you may not have known existed!</P>
                        <Div Class="Card-Box">
                            <P Class="Location"> <a href="SITES/SITES.php"><img src="Arrow.PNG" width="15%" height="15%"></a></P>
                        </Div>
                    </Div>

                </Div>
                <!------  CARD 3  ------>
                <Div Class="Card">
                    <Div Class="Zoom-Img">
                        <Div Class="Img-Card">
                            <Img Src="IMG_8769.PNG">
                        </Div>
                    </Div>

                    <Div Class="Text">
                        <H2>Parks</H2>
                        <P Class="desc">Bring your snacks and enjoy the scenery and calm atmospheres</P>
                        <Div Class="Card-Box">
                            <P Class="Location"> <a href="PARKS/PARKS.php"><img src="Arrow.PNG" width="15%" height="15%"></a></P>
                        </Div>
                    </Div>
                </Div>
            </Div>
            <!--=========Pic-break===============-->
            <h1 >current & up-coming events</h1>
            <div class="container">
                <img src="IMG_8734.JPG" class="Pic-break">
                <div class="centered">
                    <h2> Al-Ahsa Dates Marketing Festival</h2>
                    <p> The event demonstrate the importance of dates and their transformative products in the Kingdom and the world.
                        The festival, which lasts until February 18, 2023, is witnessing various events and activities, including handicrafts, folklore,
                        musical performances, local and international theatrical performances, concerts,
                         plastic art and a photo exhibition.
                        The festival is an opportunity for farmers to showcase the various kinds of the region’s
                         dates and to promote the date sector through an exchange of experience and forging closer 
                         ties among farmers, producers and manufacturers. It is also an opportunity to promote
                          Al-Ahsa dates in the Kingdom’s markets and abroad.
                    </p>
                    <div class="V-container">
                        <video autoplay loop muted src="dates vid.mp4" width="49%"></video>
                        <video autoplay loop muted src="dates vid2.mp4" width="49%"></video>
                    </div>

                </div>             
            </div>

            <!--=========Services===============-->
            <Div Class="Places-Text">
                <Small>SEE WHAT OTHERS LIKED </Small>
                <H2>Favourite Plans</H2>
            </Div>

            <Div Class="Service-Item">
                <div class="left">
                <a href="FOODIES/FOODIES.php"><Img Src="food.png"></a>
                <H2>FOODIES</H2>
                <Span Class="Rating">⭐⭐⭐⭐⭐</Span>
                </div>
                <p>Discover foodies paradise in Al-Hasa as you eat your way through famous restaurants and artisan hotspots</p>
            </Div>
            <Div Class="Service-Item">
                <a href="NATURE-LOVERS/NATURE.php"><Img Src="tree.png"></a>
                <H2>NATURE LOVERS</H2>
                <Span Class="Rating">⭐⭐⭐⭐⭐</Span>
                <p>Learn all about AL-Hasa’s wealth of archaeological significance and explore the natural beauties of its own</p>
            </Div>
            <Div Class="Service-Item">
                <a href="OUR-CULTURE/CULTURE.php"><Img Src="IMG_8788.PNG"></a>
                <H2>OUR CULTURE OUR PRIDE</H2>
                <Span Class="Rating">⭐⭐⭐⭐⭐</Span>
                <p>Indulge in Al-Hasa's most delicious & historic foods, neighborhoods, and traditional arabian souqs</p>
            </Div>
        

            
    
        </Section>
        <!--===========About Us===============-->
        <Section Class="About" id="about">
            <Div Class="About-Img">
                <Img Src="about.jpg">
            </Div>
            <Div Class="About-Text">
                <Small>ABOUT US</Small>
                <H2>OUR VISION</H2>
                <P>We aim to contribute to the expnation of tourism in AL-Hasa by encouraging visitors
                     from around the globe flock to explore its ancient history, striking landscapes, and warm hospitality.
                      Therefore enhancing the Kingdom’s international profile while preserving its national identity</P>

                <A Href="#">TEAM MEMBERS</A>
            </Div>
        </Section>

        <!--===========Footer=================-->
        <Div Class="Footer">
            <Div Class="Links">
                <H3>Contact US</H3>
                <Ul>
                    <Li>email</Li> 
                    <li>Instagram</li>                 
                </Ul>
            </Div>
            <Div Class="Links">
                <H3>Support</H3>
                <Ul>
                    <Li>Frequently Asked Questions</Li>
                </Ul>
            </Div>
        </Div>
    </Body>

</Html>
</Body>

</Html>