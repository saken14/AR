<!doctype html>
<html lang="en">
<head>
    <title>model-viewer template</title>
    <meta charset="utf-8">
    <meta name="description" content="&lt;model-viewer&gt; template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <link type="text/css" href="./styles.css" rel="stylesheet"/>

    <!-- OPTIONAL: The :focus-visible polyfill removes the focus ring for some input types -->
    <script src="https://unpkg.com/focus-visible@5.0.2/dist/focus-visible.js" defer></script>
</head>
<body>
<!-- <model-viewer> HTML element -->
<!-- ar-modes="scene-viewer webxr quick-look" -->
<model-viewer
    enable-pan
    src="models/TEDx2_v6.glb"
    ios-src="models/TEDx_AR_RED.usdz"
    ar
    touch-action="none"
    ar-modes="scene-viewer"
    camera-controls
    environment-image="neutral"
    poster="posters/poster_tedx.png"
    shadow-intensity="1"
    exposure="1.5">

    <div class="progress-bar hide" slot="progress-bar">
        <div class="update-bar"></div>
    </div>
    <button slot="ar-button" id="ar-button">
        View in your space
    </button>
    <div id="ar-prompt">
        <img src="../ar_hand_prompt.png">
    </div>

</model-viewer>


<script src="script.js"></script>
<!-- Loads <model-viewer> for browsers: camera-orbit="180deg" ios-src="models/2slon_optimize.usdz"-->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script> <!-- Библиотека model-viewer-->
</body>
</html>
