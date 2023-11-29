<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <title>Pagina principal</title>
</head>
<body>
<nav>
        <div class="navegacion__principal"><!--navegacion principal-->
            <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                      </svg><!--icono de usuario-->
            </div>
                
           
        <ul>
            <a class="navegacion__principal btn btn-info" href="principal.php">Inicio</a>
            <a class="navegacion__principal btn btn-info" href="generar.php">Generar</a>
            <a class="navegacion__principal btn btn-info" href="consultas.php">Registro</a>
            <a class="navegacion__principal btn btn-info" href="index.php">Cerrar sesion</a>
        </ul>

        </div>
    </nav>
  
    <section class="cards">
      <article class="card card--1">
        <div class="card__info-hover">
            <div class="card__clock-info">
            </div>
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
           <div class="card__img--hover"></div>
         </a>
        <div class="card__info">
          <span class="card__category"> Fae infinity</span>
          <h3 class="card__title">Fae es un sitio web enfocado a la elaboracion de horarios escolares de manera eficaz y sencilla </h3>
          <span class="card__by"><a href="#" class="card__author" title="author"></a></span>
        </div>
      </article>
        
        
      <article class="card card--2">
        <div class="card__info-hover">
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
           <div class="card__img--hover"></div>
         </a>
        <div class="card__info">
          <span class="card__category">Eficiencia</span>
          <h3 class="card__title">Es una herramienta para el uso educativo optimizando el tiempo de elaboracion de un horario escolar</h3>
          <span class="card__by"> <a href="#" class="card__author" title="author"></a></span>
        </div>
        
      </article>  
      <article class="card card--3">
        <div class="card__img"></div>
        <a href="#" class="card_link">
           <div class="card__img--hover"></div>
         </a>
        <div class="card__info">
          <span class="card__category"> Iteratividad</span>
          <h3 class="card__title">La funcion principal del sitio web es la funcion iterativa de los datos para elaborar horarios escolares</h3>
          <span class="card__by"><a href="#" class="card__author" title="author"></a></span>
        </div>
      </article>
        <article class="card card--4">
          <div class="card__img"></div>
          <a href="#" class="card_link">
             <div class="card__img--hover"></div>
           </a>
          <div class="card__info">
            <span class="card__category"> Optimizacion</span>
            <h3 class="card__title">la capacidad de hacer o resolver alguna cosa de la manera más eficiente posible </h3>
          </div>
        </article>
        
        </section>
<script>
import * as PIXI from "https://cdn.skypack.dev/pixi.js@5.x";
import { KawaseBlurFilter } from "https://cdn.skypack.dev/@pixi/filter-kawase-blur@3.2.0";
import SimplexNoise from "https://cdn.skypack.dev/simplex-noise@3.0.0";
import hsl from "https://cdn.skypack.dev/hsl-to-hex";
import debounce from "https://cdn.skypack.dev/debounce";

// return a random number within a range
function random(min, max) {
  return Math.random() * (max - min) + min;
}

// map a number from 1 range to another
function map(n, start1, end1, start2, end2) {
  return ((n - start1) / (end1 - start1)) * (end2 - start2) + start2;
}

// Create a new simplex noise instance
const simplex = new SimplexNoise();

// ColorPalette class
class ColorPalette {
  constructor() {
    this.setColors();
    this.setCustomProperties();
  }

  setColors() {
    // pick a random hue somewhere between 220 and 360
    this.hue = ~~random(220, 360);
    this.complimentaryHue1 = this.hue + 30;
    this.complimentaryHue2 = this.hue + 60;
    // define a fixed saturation and lightness
    this.saturation = 95;
    this.lightness = 50;

    // define a base color
    this.baseColor = hsl(this.hue, this.saturation, this.lightness);
    // define a complimentary color, 30 degress away from the base
    this.complimentaryColor1 = hsl(
      this.complimentaryHue1,
      this.saturation,
      this.lightness
    );
    // define a second complimentary color, 60 degrees away from the base
    this.complimentaryColor2 = hsl(
      this.complimentaryHue2,
      this.saturation,
      this.lightness
    );

    // store the color choices in an array so that a random one can be picked later
    this.colorChoices = [
      this.baseColor,
      this.complimentaryColor1,
      this.complimentaryColor2
    ];
  }

  randomColor() {
    // pick a random color
    return this.colorChoices[~~random(0, this.colorChoices.length)].replace(
      "#",
      "0x"
    );
  }

  setCustomProperties() {
    // set CSS custom properties so that the colors defined here can be used throughout the UI
    document.documentElement.style.setProperty("--hue", this.hue);
    document.documentElement.style.setProperty(
      "--hue-complimentary1",
      this.complimentaryHue1
    );
    document.documentElement.style.setProperty(
      "--hue-complimentary2",
      this.complimentaryHue2
    );
  }
}

// Orb class
class Orb {
  // Pixi takes hex colors as hexidecimal literals (0x rather than a string with '#')
  constructor(fill = 0x000000) {
    // bounds = the area an orb is "allowed" to move within
    this.bounds = this.setBounds();
    // initialise the orb's { x, y } values to a random point within it's bounds
    this.x = random(this.bounds["x"].min, this.bounds["x"].max);
    this.y = random(this.bounds["y"].min, this.bounds["y"].max);

    // how large the orb is vs it's original radius (this will modulate over time)
    this.scale = 1;

    // what color is the orb?
    this.fill = fill;

    // the original radius of the orb, set relative to window height
    this.radius = random(window.innerHeight / 6, window.innerHeight / 3);

    // starting points in "time" for the noise/self similar random values
    this.xOff = random(0, 1000);
    this.yOff = random(0, 1000);
    // how quickly the noise/self similar random values step through time
    this.inc = 0.002;

    // PIXI.Graphics is used to draw 2d primitives (in this case a circle) to the canvas
    this.graphics = new PIXI.Graphics();
    this.graphics.alpha = 0.825;

    // 250ms after the last window resize event, recalculate orb positions.
    window.addEventListener(
      "resize",
      debounce(() => {
        this.bounds = this.setBounds();
      }, 250)
    );
  }

  setBounds() {
    // how far from the { x, y } origin can each orb move
    const maxDist =
      window.innerWidth < 1000 ? window.innerWidth / 3 : window.innerWidth / 5;
    // the { x, y } origin for each orb (the bottom right of the screen)
    const originX = window.innerWidth / 1.25;
    const originY =
      window.innerWidth < 1000
        ? window.innerHeight
        : window.innerHeight / 1.375;

    // allow each orb to move x distance away from it's x / y origin
    return {
      x: {
        min: originX - maxDist,
        max: originX + maxDist
      },
      y: {
        min: originY - maxDist,
        max: originY + maxDist
      }
    };
  }

  update() {
    // self similar "psuedo-random" or noise values at a given point in "time"
    const xNoise = simplex.noise2D(this.xOff, this.xOff);
    const yNoise = simplex.noise2D(this.yOff, this.yOff);
    const scaleNoise = simplex.noise2D(this.xOff, this.yOff);

    // map the xNoise/yNoise values (between -1 and 1) to a point within the orb's bounds
    this.x = map(xNoise, -1, 1, this.bounds["x"].min, this.bounds["x"].max);
    this.y = map(yNoise, -1, 1, this.bounds["y"].min, this.bounds["y"].max);
    // map scaleNoise (between -1 and 1) to a scale value somewhere between half of the orb's original size, and 100% of it's original size
    this.scale = map(scaleNoise, -1, 1, 0.5, 1);

    // step through "time"
    this.xOff += this.inc;
    this.yOff += this.inc;
  }

  render() {
    // update the PIXI.Graphics position and scale values
    this.graphics.x = this.x;
    this.graphics.y = this.y;
    this.graphics.scale.set(this.scale);

    // clear anything currently drawn to graphics
    this.graphics.clear();

    // tell graphics to fill any shapes drawn after this with the orb's fill color
    this.graphics.beginFill(this.fill);
    // draw a circle at { 0, 0 } with it's size set by this.radius
    this.graphics.drawCircle(0, 0, this.radius);
    // let graphics know we won't be filling in any more shapes
    this.graphics.endFill();
  }
}

// Create PixiJS app
const app = new PIXI.Application({
  // render to <canvas class="orb-canvas"></canvas>
  view: document.querySelector(".orb-canvas"),
  // auto adjust size to fit the current window
  resizeTo: window,
  // transparent background, we will be creating a gradient background later using CSS
  transparent: true
});

app.stage.filters = [new KawaseBlurFilter(30, 10, true)];

// Create colour palette
const colorPalette = new ColorPalette();

// Create orbs
const orbs = [];

for (let i = 0; i < 10; i++) {
  const orb = new Orb(colorPalette.randomColor());

  app.stage.addChild(orb.graphics);

  orbs.push(orb);
}

// Animate!
if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
  app.ticker.add(() => {
    orbs.forEach((orb) => {
      orb.update();
      orb.render();
    });
  });
} else {
  orbs.forEach((orb) => {
    orb.update();
    orb.render();
  });
}

document
  .querySelector(".overlay__btn--colors")
  .addEventListener("click", () => {
    colorPalette.setColors();
    colorPalette.setCustomProperties();

    orbs.forEach((orb) => {
      orb.fill = colorPalette.randomColor();
    });
  });

</script>

    <footer class="footer1">
        <div class="iehp">
            <form action="formulario.php" class="formulario" method="POST">

                            <div class="leg">
                                    <h4>Contactanos al llenar el campo</h4>
                            </div>
                        <div>
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" placeholder="Nombre" required="">
                        </div>
                        <p></p>
                       <div>
                            <label for="">Celular</label>
                            <input type="tel" name="cel" placeholder="Telefono" required="">
                       </div>
                       <p></p>
                       <div>
                        <label for="">Correo</label>
                        <input type="email" name="correo" placeholder="Tu correo">
                       </div>
                       <p></p>
                       <div>
                        <label for="">Mensaje</label>
                   <input type="text" name="mensaje" placeholder="Mensaje">
                       </div>
                      <p></p>
                        <input class="btn btn-warning" type="submit" name="enviar" value="Enviar">
                        <p></p>
                        <p></p>
        </form>
        <div class="icono">
          <a href="https://www.facebook.com/search/top/?q=iehp"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
          </svg></a>
             <a href="https://www.instagram.com/iehpoficial/"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                <path d="M16.5 7.5l0 .01" />
              </svg></a>
        </div>
    </footer>
</body>
</html>