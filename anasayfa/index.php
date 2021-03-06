
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="charset" value="utf-8" />
<meta content="charset:utf-8" />
<title>Phantom</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/944267417759137843/949244933708054528/cu.gif" />
<link href="https://botsbase.net/assets/css/main.css" rel="stylesheet">
<link href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="css/animations.css" />
<link rel="stylesheet" href="https://botsbase.net/assets/css/main.css" />
<link rel="stylesheet" href="css/new.css" />
<link rel="stylesheet" href="css/mobile.css" />
	
  <!-- * LINKS * -->	
  <link rel="stylesheet" href="style.css">
	<link rel="icon" href="">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300" rel="stylesheet" type="text/css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- * LINKS * -->	
  
<script src="https://cdn.tomassmith.me/public-scripts/disable-inspect.js"></script>
</head>

<body oncontextmenu="return false">
<div class="loadingbar"></div>
<nav>
<div class="toggle">
<div class="bar1"></div>
<div class="bar2"></div>
<div class="bar3"></div>
</div>

<div> &nbsp &nbsp
    <a class="btn" href="/"><i class="fas fa-home"></i>・Ana Sayfa</a>
    <a class="btn" href="komutlar.html"><i class="fas fa-code"></i>・Komutlar</a>
      <a class="btn" href="https://discord.com/oauth2/authorize?client_id=937754350565077032&scope=bot&permissions=0"><i class="fad fa-plus"></i>・Sunucuna Ekle</a>
  <a class="btn" href="bango.php"><i ></i>Bongo Cat</a>
    </div>
      
<div class="logo">
</div>
</div>
<div class="right">
<a class="btn" href="https://www.youtube.com/channel/UC_DiIw6inIWSPA_EIy3I8Zw"><i class="fab fa-youtube"></i>・Youtube</a>
<a class="btn" href="https://discord.gg/GAVZwqyC5U" target="_blank"><i class="fab fa-discord"></i>・Discord</a
        >
</div>
</nav>
<div class="mobilenav">
<div class="top">
<div class="logo">
</div>
<div class="close">
<img src="https://cdn.glitch.com/47f2aa77-8b49-40b8-bee5-14ea31f0706e%2Fletter-x.svg" height="25px" />
</div>
</div>


</div>
<div class="header">
<div class="call">
<div class="title">
Phantom
</div> 
<div class="description">
  En iyi Kodlar!. Türkiyenin en büyük kod paylaşım ve destek sunucularından olan Phantom, Kod paylaşım sitesi ile hizmete devam ediyor!
</div>
<div class="links">
<a href="https://discord.com/oauth2/authorize?client_id=937754350565077032&scope=bot&permissions=0" target="_blank" class="btn btn-fill-primary btn-large"><i class="fad fa-plus"></i>・Sunucuna Ekle</a
          ><a href="https://discord.gg/GAVZwqyC5U" class="btn btn-fill-secondary btn-large" target="_blank"><i class="fab fa-discord"></i>・Discord</a
          >
</div>
</div>
<div class="hero">

<img style= "width: 400px; height: 400px;" class="bounce-animation" src="https://cdn.discordapp.com/attachments/944267417759137843/949244933708054528/cu.gif" / ">

</div>
</div>
<div class="section">
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 320" class="waves waves-up" preserveaspectratio="none">
<path fill="#8F7AD0" class="waves-up-path" fill-opacity="1" d="M0,32L30,53.3C60,75,120,117,180,117.3C240,117,300,75,360,48C420,21,480,11,540,37.3C600,64,660,128,720,149.3C780,171,840,149,900,122.7C960,96,1020,64,1080,74.7C1140,85,1200,139,1260,170.7C1320,203,1380,213,1410,218.7L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
</svg>
<div class="content bg-primary">
<div class="title">

</div>
<div class="description">


</footer>
<script src="//instant.page/5.1.0" type="module" integrity="sha384-by67kQnR+pyfy8yWP4kPO12fHKRLHZPfEsiSXR8u2IKcTdxD805MGUXBzVPnkLHw"></script>
<script>
      setTimeout(function() {
        document.querySelector("body > .loadingbar").style.width = "100vw";
        document
          .querySelector("body > .loadingbar")
          .addEventListener("transitionend", function() {
            document.querySelector("body > .loadingbar").style.opacity = "0";
            document
              .querySelector("body > .loadingbar")
              .addEventListener("transitionend", function() {
                document.querySelector("body > .loadingbar").style.display =
                  "none";
              });
          });
      }, 100);
      document
        .querySelectorAll(".currentYear")
        .forEach(e => (e.innerText = new Date().getFullYear()));
      document.querySelector("nav > .toggle").onclick = function() {
        this.classList.toggle("open");
        if (this.classList.contains("open")) {
          document.querySelector(".mobilenav").style.display = "flex";
          document.querySelector(".mobilenav").style.transform = "scale(1)";
        } else {
          document.querySelector(".mobilenav").style.transform = "scale(0.1)";

          setTimeout(function() {
            document.querySelector(".mobilenav").style.display = "none";
          }, 300);
        }
      };
      document.querySelector(".mobilenav .close").onclick = function() {
        document.querySelector(".mobilenav").style.transform = "scale(0.1)";
        document.querySelector("nav > .toggle").classList.remove("open");
        setTimeout(function() {
          document.querySelector(".mobilenav").style.display = "none";
        }, 300);
      };
      document
        .querySelectorAll("img[data-href^='https']")
        .forEach(e => (e.onclick = _ => window.open(e.dataset.href)));
		document.querySelectorAll(".fetch").forEach(async (e) => {
			if(!e.dataset.user) return;
			const result = await fetch("https://api.blurple.gg/user/" + e.dataset.user).then(e => e.json()).catch();
			e.children[0].children[0].src = "https://cdn.discordapp.com/avatars/" + result.id + "/" + result.avatar + "." + (result.avatar.startsWith("a_") ? "gif" : "png") + "?size=128";
			e.children[1].innerText = result.username + "#" + result.discriminator;
		});
    </script>


</body>
</html>