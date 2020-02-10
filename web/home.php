<!doctype html>

<html lang="en">
<head>
	<link rel="icon" href="REALkevMicon.ico">
	<meta charset="utf-8">
	<title>KevMGaming | Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A homepage that helps everyone out">
  <meta name="author" content="Kevin Matos">
	<link rel="stylesheet" href="footer.css">
  <style>
    body {
    background-image: url("https://tinyurl.com/yyr95t46");
    background-size: 1000%;
    }
    a:link {
    color: blue;
    display: inline-block;
    }
    .links { margin: 3em; }
    ul {
    font-size: 26px;
    letter-spacing: 2px;
    text-shadow: 1px 1px 3px #FFFFFF;
    text-align: center;
    list-style-position: inside;
    border: 1px solid rgba(0, 0, 0, 1.0);
    background-color: rgba(0, 0, 0, 0.1);
    border-radius: 16px;
    padding: 16px;
    }
    ul.serif {
    font-family: Verdana, Helvetica, serif
    }
    h1 {
    font-size: 48px;
    text-align: center;
    }
    p { font-size: 22px; }
  </style>
</head>

<body>
	<script src="null.js"></script>
  <h1>A Home Page</h1>
  <div class="links">
    <ul class="serif">
      <li><a href="directory.html">View all assignments</a></li>
    </ul>
  </div>
  <h3>About</h3>
  <div>
    <p>After all, why dive in so quickly when we can first try to learn about the author?</p><br>
    <p>
      <?php
      date_default_timezone_set("America/New_York");
      echo "Back home, it is currently " . date("h:ia");
      ?>
    </p>
    <p>
    A move to Montreal at 5 years old immersed me into the Quebecois culture
    and therefore the French language. All my mind knew at the time was that it
    loved computers, video games and math. This would be my first year of school.
    The teachers noticed I was miles ahead of other students. They offered that
    I join the French immersion program. You see, Quebec favours anything at all
    that promotes French. Sure, I mean the government, but I also mean the people.
    If you were a middle aged French man or lady, you would love nothing more than
    to see the language taught to children early on and make sure that because they
    speak French, they are smarter than the English speakers. This was true whether
    you taught at a bilingual school, or a French school. That's correct, there is
    no <i>English School</i> option in Quebec. With that being said, the teachers in the
    French program simply paid more attention to the students and treated them and
    taught them at their actual age level of learning. So when the question came to
    my mom and I when we were in a meeting with my teacher, that is, about switching
    programs, my mom turned to my 6 year old self and asked,<br>
    <br>"Kevin, what do you think?"<br>
    <br>"Of course not, French is <u>stupid</u>."<br>
    </p>
    <p>
    I am convinced that since then, word got out and the French community has
    hated me ever since. When I realized that the English-only speakers were
    treated as lower class to the French, I decided I would have to actually
    learn how to speak French. I did end up switching into the French program
    in my last year of elementary school, to prepare me for high school, as
    I wanted to go into the IB program. Finally a challenge was before me.
    I was expected to be on par with everyone else who spoke this language
    growing up, while this was my first time being exposed to it. I got into
    the program I wanted to in high school and somehow managed to pass French
    class all 5 years. Based on my marks then, I was placed into the
    lowest-skilled French class when I got into college, or CEGEP as it is
    called in Quebec. Upon finishing the two required French classes, I was
    free from ever having to study French again. This remained true until I
    realized that outside of Quebec, I knew much more French than the average
    Canadian. Going out into the mission field I embraced the fact that 'I
    speak French' and even had opportunities to teach in French, along side
    with my native English and Spanish opportunities. My bubble was burst
    again upon arriving back from my mission to Quebec, as I was just another
    sub-par trilingual 22 year old college student. This made finding a job
    very difficult, especially because it is not significant if you can speak
    Spanish in Montreal. You need French if you want to work there.<br><br>
    I have accepted that in Montreal I am naturally held back from my
    potential, but this quote helps me out when it comes to putting in hard work:
    </p>
    <blockquote cite="normanpowell.com">
      There are going to be barriers, challenges, and naysayers along<br>
      the way - but you need to maintain focus. Outside opinions are<br>
      are irrelevant. Hard works breeds success.<br>
      <b style="font-variant: small-caps;">
      Just Remember: Keep Moving and Always, Understand The Grind.</b><br>
      <br><i>~ Norman Powell</i>
    </blockquote>
  </div>
  
  <footer>
    <p><a class="sender" href="home.php">Home</a> |
      <a class="sender" href="directory.html">CS 313 Assignments</a> |
      <a class="sender" href="#cabeza">Return to top</a><br>
      <a href="https://youtube.com/kevm967">
        <img src="https://i.ibb.co/6vBchr4/2019-LOGO-1.png"
        alt="KevMGamingLogo" style="vertical-align:middle" width="80" height="80">
      </a>
    KevMGaming © <?php echo date("Y");?></p>
  </footer>
</body>