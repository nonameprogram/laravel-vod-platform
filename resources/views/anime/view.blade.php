<!Doctype HTML>


<style>

@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap');

:root {
  --border-gray:#394253;
}


a:link, a:visited {
    color: inherit;
    text-decoration: none;
}

body {
    /*font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;*/
    font-family: 'Nunito', sans-serif;
    background: #121212;
    color: #fff;
    margin: 0;
}

.container {
    width: 90%;
    margin: 20px 5% 150px 5%;
    float: left;
}

.card {
    width: calc(calc(100% / 7) - 10px);
    float: left;
    height: 100%;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.card img {
    border-radius: 5px;
}

.card-details {
    width: 100%;
    float:left;
    padding: 15px 0px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    position: relative;
}

h4.primary-title {
    margin: 0;
    font-weight: 400;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    font-size: 18px;
}

h4.second-line {
    font-size: 14px;
    color: rgba(255,255,255,.6);
}

.dot {
    width:4px;
    height:4px;
    background:rgba(255,255,255,.6);
    border-radius: 50%;
    margin: 0px 3px;
    display: inline-block;
    vertical-align:middle;
    position: relative;
    top: -1px;
}

h1.primary-title {
    margin-bottom: 35px;
    font-weight: 600;
}

.mt-3 {
    margin-top: 30px;
}

.shows {
    margin-bottom: 30px;
    width: 100%;
    float: left;
}

.smth-after {
    position: relative;
    height: auto;
}

.smth-after:after {
    box-shadow: inset 0px -75px 168px -30px #000000;
    -webkit-box-shadow: inset 0px -75px 160px -30px #000000;
    -moz-box-shadow: inset 0px -75px 160px -30px #000000;
    -o-box-shadow: inset 0px -75px 160px -30px #000000;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    content: "";
    border-radius: 3px;
}

</style>
<body>





<div class="container">
    <h1 class="primary-title">TV Shows</h1>

    <div class="shows">
    <div class="card" style="margin-left:5px;margin-right:10px">
        <img src="/mt.jpg" width="100%">
        <div class="card-details">
            <h4 class="primary-title"><a href="series/view">Mushoku Tensei: Jobless Reincarnation</a></h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card" style="margin-right:10px">
        <img src="/food-wars.jpeg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Food Wars</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card" style="margin-right:10px">
        <img src="/sao.jpg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Sword Art Online</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card" style="margin-right:10px">
        <img src="/demon-slayer.jpeg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Demon Slayer</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card" style="margin-right:10px">
        <img src="/kuma.jpg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Kuma Kuma Kuma Bear</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card" style="margin-right:10px">
        <img src="/mt.jpg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Cells at Work!</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card">
        <img src="/konosuba.jpg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Konosuba</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>
</div>


    <!-- Sekcja 2 -->
    <h1 class="primary-title">Recently Added Shows</h1>

    <div class="card" style="margin-left:5px;margin-right:10px">
        <!--<div class="smth-after">-->
            <img src="/mt.jpg" width="100%">
        <!--</div>-->
        <div class="card-details">
            <h4 class="primary-title">Mushoku Tensei: Jobless Reincarnation</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card" style="margin-right:10px">
        <img src="/food-wars.jpeg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Food Wars</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card" style="margin-right:10px">
        <img src="/sao.jpg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Sword Art Online</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card" style="margin-right:10px">
        <img src="/demon-slayer.jpeg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Demon Slayer</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card" style="margin-right:10px">
        <img src="/kuma.jpg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Kuma Kuma Kuma Bear</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card" style="margin-right:10px">
        <img src="/mt.jpg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Cells at Work!</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>

    <div class="card">
        <img src="/konosuba.jpg" width="100%">
        <div class="card-details">
            <h4 class="primary-title">Konosuba</h4>
            <h4 class="primary-title second-line">
                2021
                <span class="dot"></span>
                13 Odcinków
            </h4>
        </div>
    </div>
</div>

</body>

</html>
