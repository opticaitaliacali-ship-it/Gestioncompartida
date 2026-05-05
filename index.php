<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Historia del Cálculo Integral:</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Diseño Pro</title>

<style>
  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #0f172a, #020617);
    color: #e2e8f0;
  }

  header {
    background: rgba(30, 41, 59, 0.6);
    backdrop-filter: blur(10px);
    padding: 30px;
    text-align: center;
    border-bottom: 1px solid rgba(255,255,255,0.1);
  }

  header h1 {
    margin: 0;
    font-size: 2.5em;
    background: linear-gradient(90deg, #38bdf8, #6366f1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  section {
    max-width: 1000px;
    margin: auto;
    padding: 20px;
  }

  .card {
    background: rgba(30, 41, 59, 0.5);
    backdrop-filter: blur(12px);
    padding: 25px;
    margin: 20px 0;
    border-radius: 16px;
    border: 1px solid rgba(255,255,255,0.1);
    box-shadow: 0 10px 30px rgba(0,0,0,0.6);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  /* brillo animado */
  .card::before {
    content: "";
    position: absolute;
    width: 150%;
    height: 150%;
    background: linear-gradient(120deg, transparent, rgba(56,189,248,0.3), transparent);
    transform: rotate(25deg);
    top: -50%;
    left: -50%;
    opacity: 0;
    transition: 0.5s;
  }

  .card:hover::before {
    opacity: 1;
    top: 100%;
    left: 100%;
  }

  .card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0,0,0,0.8);
  }

  h2 {
    color: #38bdf8;
  }

  footer {
    background: rgba(30, 41, 59, 0.6);
    backdrop-filter: blur(10px);
    text-align: center;
    padding: 20px;
    margin-top: 30px;
    border-top: 1px solid rgba(255,255,255,0.1);
  }

  /* botón moderno */
  .btn {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    border-radius: 8px;
    background: linear-gradient(90deg, #38bdf8, #6366f1);
    color: white;
    text-decoration: none;
    transition: 0.3s;
  }

  .btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 15px #38bdf8;
  }

</style>
</head>

<body>

<header>
  <h1>📘 HISTORIA DEL CALCULO INTEGRAL..</h1>
  <p>Origen y evolución de una de las ramas más importantes de las matemáticas</p>
</header>

<section>

  <div class="card">
    <h2>🔹 Orígenes antiguos</h2>
    <p>
      El cálculo integral tiene sus raíces en las civilizaciones antiguas. 
      Matemáticos griegos como Arquímedes desarrollaron métodos para calcular áreas 
      y volúmenes utilizando técnicas de agotamiento, que son consideradas 
      precursoras del cálculo integral moderno.
    </p>
  </div>

  <div class="card">
    <h2>🔹 Edad Media</h2>
    <p>
      Durante la Edad Media, matemáticos del mundo islámico y de la India 
      avanzaron en el estudio de series y sumas infinitas, sentando bases 
      importantes para el desarrollo del cálculo.
    </p>
  </div>

  <div class="card">
    <h2>🔹 Desarrollo en el siglo XVII:</h2>
    <p>
      El cálculo integral fue formalmente desarrollado en el siglo XVII por 
      Isaac Newton y Gottfried Wilhelm Leibniz. Ambos, de forma independiente, 
      crearon métodos para calcular áreas bajo curvas y resolver problemas 
      relacionados con el cambio y la acumulación.
    </p>
  </div>

  <div class="card">
    <h2>🔹 Formalización</h2>
    <p>
      En los siglos posteriores, matemáticos como Cauchy y Riemann 
      formalizaron el cálculo integral, definiendo conceptos rigurosos 
      como la integral definida y los límites.
    </p>
  </div>

  <div class="card">
    <h2>🔹 Importancia actual</h2>
    <p>
      Hoy en día, el cálculo integral es fundamental en áreas como la física, 
      la ingeniería, la economía y la informática, permitiendo modelar fenómenos 
      como el movimiento, el crecimiento y la acumulación.
    </p>
  </div>

</section>

<footer>
  <p>🌍 Página educativa sobre matemáticas - Cálculo Integral</p>
</footer>

</body>
</html>