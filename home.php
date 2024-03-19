<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <link rel="apple-touch-icon" type="image/png" href=""
    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <title>Welcome</title>
    <link rel="canonical" href="https://codepen.io/aaroniker/pen/WNvjpxd">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/inter-ui@3.11.0/inter.min.css'>
  
<style>
#login-form {
  --primary: #6D58FF;
  --primary-dark: #362A89;
  --dark: #2B3044;
  --grey-dark: #404660;
  --grey: #8A91B4;
  --grey-light: #A6ACCD;
  --light: #BBC1E1;
  --pale: #ECEFFC;
  --white: #FFFFFF;
  --red: #F04949;
  width: 100%;
  max-width: 180px;
}
#login-form .logo {
  width: 44px;
  height: 44px;
  display: block;
  margin: 0 auto;
  fill: var(--primary);
}
#login-form h1 {
  margin: 24px 0;
  font-family: inherit;
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  color: var(--dark);
}
#login-form .input {
  position: relative;
}
#login-form .input label {
  pointer-events: none;
  font-size: 12px;
  font-weight: 500;
  line-height: 1.5;
  position: absolute;
  top: 8px;
  left: 0;
  transform-origin: 0 50%;
  transform: translateY(var(--label-y, 0)) scale(var(--label-scale, 1)) translateZ(0);
  transition: transform 0.3s, color 0.3s;
  color: var(--label-color, var(--grey-light));
}
#login-form .input input {
  width: 100%;
  border-radius: 0;
  -webkit-appearance: none;
}
#login-form .input input:not(:-moz-placeholder-shown) + label {
  --label-y: -17px;
  --label-scale: .8;
  --label-color: var(--grey);
}
#login-form .input input:not(:-ms-input-placeholder) + label {
  --label-y: -17px;
  --label-scale: .8;
  --label-color: var(--grey);
}
#login-form .input input:not(:placeholder-shown) + label, #login-form .input input:focus + label {
  --label-y: -17px;
  --label-scale: .8;
  --label-color: var(--grey);
}
#login-form .input.email {
  margin-bottom: 16px;
}
#login-form .input.email input {
  background: none;
  outline: none;
  border: none;
  color: var(--grey-dark);
  font-weight: 500;
  font-family: inherit;
  font-size: 13px;
  letter-spacing: 0.025em;
  line-height: 22px;
  caret-color: var(--primary);
  padding: 7px 0 5px 0;
  box-shadow: inset 0 -1px 0 0 var(--grey);
}
#login-form .input.password {
  height: 34px;
}
#login-form .input.password .dots {
  position: absolute;
  display: flex;
  left: 0;
  top: 50%;
  transform: translateY(-2px);
}
#login-form .input.password .dots i {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--grey-dark);
  display: block;
  margin-right: 4px;
  -webkit-animation: var(--name, scale-in) 0.05s linear forwards;
          animation: var(--name, scale-in) 0.05s linear forwards;
}
#login-form .input.password .dots i.remove {
  --name: scale-out;
}
#login-form .input.password .dots i:nth-child(1) {
  --delay: 393.5ms;
}
#login-form .input.password .dots i:nth-child(2) {
  --delay: 387ms;
}
#login-form .input.password .dots i:nth-child(3) {
  --delay: 380.5ms;
}
#login-form .input.password .dots i:nth-child(4) {
  --delay: 374ms;
}
#login-form .input.password .dots i:nth-child(5) {
  --delay: 367.5ms;
}
#login-form .input.password .dots i:nth-child(6) {
  --delay: 361ms;
}
#login-form .input.password .dots i:nth-child(7) {
  --delay: 354.5ms;
}
#login-form .input.password .dots i:nth-child(8) {
  --delay: 348ms;
}
#login-form .input.password .dots i:nth-child(9) {
  --delay: 341.5ms;
}
#login-form .input.password .dots i:nth-child(10) {
  --delay: 335ms;
}
#login-form .input.password .dots i:nth-child(11) {
  --delay: 328.5ms;
}
#login-form .input.password .dots i:nth-child(12) {
  --delay: 322ms;
}
#login-form .input.password .dots i:nth-child(13) {
  --delay: 315.5ms;
}
#login-form .input.password .dots i:nth-child(14) {
  --delay: 309ms;
}
#login-form .input.password .dots i:nth-child(15) {
  --delay: 302.5ms;
}
#login-form .input.password .cursor {
  position: absolute;
  height: 15px;
  width: 1px;
  left: 0;
  top: 10px;
  background: var(--primary);
  opacity: 0;
  transform: translateX(var(--cursor-x, 0));
  transition: transform var(--cursor-duration, 0.1s);
}
#login-form .input.password input {
  opacity: 0;
  padding: 0;
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
}
#login-form .input.password input:focus + label + .cursor {
  -webkit-animation: cursor 1s ease infinite;
          animation: cursor 1s ease infinite;
}
#login-form .input .line,
#login-form .input .tick {
  pointer-events: none;
  position: absolute;
  left: var(--left, 0);
  bottom: var(--bottom, -10px);
  opacity: var(--opacity, 1);
  transition: opacity 0s linear var(--tick-opacity-delay, 0.5s);
}
#login-form .input .line svg,
#login-form .input .tick svg {
  stroke: var(--line-stroke, var(--grey));
  stroke-width: 1;
  fill: none;
  display: block;
  width: var(--width, 900px);
  height: var(--height, 22px);
  transform: translateX(var(--x, var(--line-x, 0)));
  transition: transform var(--line-x-duration, 0s) ease, stroke 0.3s;
}
#login-form .input .line {
  overflow: hidden;
  width: 100%;
  transform-origin: 0 50%;
}
#login-form .input .tick {
  --left: 100%;
  --bottom: -1px;
  --width: 32px;
  --height: 28px;
  --x: -16px;
  --opacity: 0;
}
#login-form .input .tick svg {
  stroke: var(--tick-stroke, var(--grey));
  stroke-dasharray: 17 81;
  stroke-dashoffset: var(--tick-offset, 34px);
  transition: stroke-dashoffset 0.5s ease var(--tick-delay, 0s), stroke 0.5s ease var(--tick-delay, 0s);
}
#login-form button {
  border: none;
  outline: none;
  padding: 10px 0;
  margin: 24px 0 0 0;
  border-radius: 7px;
  color: var(--c, #fff);
  width: 100%;
  font-size: 14px;
  line-height: 16px;
  position: relative;
  font-family: inherit;
  font-weight: 500;
  background: var(--b, var(--primary-dark));
  transition: color 0.3s, background 0.3s;
  -webkit-appearance: none;
  -webkit-tap-highlight-color: transparent;
  cursor: pointer;
}
#login-form button:disabled {
  --b: var(--pale);
  --c: var(--grey-light);
  cursor: not-allowed;
}
#login-form button svg {
  width: 16px;
  height: 16px;
  display: block;
  position: absolute;
  left: 50%;
  top: 50%;
  margin: -8px 0 0 -8px;
  fill: none;
  stroke: currentColor;
  stroke-linecap: round;
  stroke-width: 1.5;
  opacity: var(--svg-o, 0);
  transform: translateY(var(--svg-y, -16px)) rotate(-90deg) scale(var(--svg-s, 0.7)) translateZ(0);
  transition: transform 0.3s, opacity 0.3s;
}
#login-form button svg circle:first-child {
  stroke-opacity: 0.1;
}
#login-form button svg circle:last-child {
  stroke-dasharray: 38px;
  stroke-dashoffset: 114px;
}
#login-form button span {
  display: inline-block;
  vertical-align: top;
  line-height: 16px;
  opacity: var(--span-o, 1);
  transform: translateY(var(--span-y, 0)) scale(var(--span-s, 1)) translateZ(0);
  transition: transform 0.3s, opacity 0.3s;
}
#login-form.processing:not(.error):not(.success) button {
  --svg-y: 0;
  --svg-s: 1;
  --svg-o: 1;
  --span-y: 16px;
  --span-s: .7;
  --span-o: 0;
}
#login-form.processing:not(.error):not(.success) button svg circle:last-child {
  -webkit-animation: load 1.2s linear 0.3s;
          animation: load 1.2s linear 0.3s;
}
#login-form.processing.error {
  --line-x: -80%;
  --line-x-duration: 2s;
  --line-stroke: var(--red);
  --cursor-duration: 1s;
}
#login-form.processing.error .dots i {
  -webkit-animation: flip 0.4s linear var(--delay) forwards;
          animation: flip 0.4s linear var(--delay) forwards;
}
#login-form.processing.success .input .tick {
  --opacity: 1;
  --tick-offset: 98px;
  --tick-delay: .45s;
  --tick-opacity-delay: 0s;
  --tick-stroke: var(--primary);
  -webkit-animation: tick 0.4s linear forwards;
          animation: tick 0.4s linear forwards;
}
#login-form.processing.success .input .line {
  -webkit-animation: line 0.5s linear forwards;
          animation: line 0.5s linear forwards;
}

@-webkit-keyframes tick {
  70%, 80% {
    transform: translateX(-10px);
  }
}

@keyframes tick {
  70%, 80% {
    transform: translateX(-10px);
  }
}
@-webkit-keyframes line {
  70% {
    transform: scaleX(0.8);
  }
}
@keyframes line {
  70% {
    transform: scaleX(0.8);
  }
}
@-webkit-keyframes flip {
  25% {
    transform: translateY(8px);
  }
  35% {
    transform: translateY(12px);
  }
  65% {
    transform: translateY(-4px);
  }
  100% {
    transform: translateY(-12px) scale(0);
  }
}
@keyframes flip {
  25% {
    transform: translateY(8px);
  }
  35% {
    transform: translateY(12px);
  }
  65% {
    transform: translateY(-4px);
  }
  100% {
    transform: translateY(-12px) scale(0);
  }
}
@-webkit-keyframes load {
  from {
    stroke-dashoffset: 114px;
  }
  to {
    stroke-dashoffset: 38px;
  }
}
@keyframes load {
  from {
    stroke-dashoffset: 114px;
  }
  to {
    stroke-dashoffset: 38px;
  }
}
@-webkit-keyframes scale-in {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
}
@keyframes scale-in {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
}
@-webkit-keyframes scale-out {
  from {
    transform: scale(1);
  }
  to {
    transform: scale(0);
  }
}
@keyframes scale-out {
  from {
    transform: scale(1);
  }
  to {
    transform: scale(0);
  }
}
@-webkit-keyframes cursor {
  50% {
    opacity: 1;
  }
}
@keyframes cursor {
  50% {
    opacity: 1;
  }
}
html {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
}

* {
  box-sizing: inherit;
}
*:before, *:after {
  box-sizing: inherit;
}

body {
  min-height: 100vh;
  display: flex;
  font-family: "Inter", "Inter UI", Arial;
  justify-content: center;
  align-items: center;
  background: #F6F8FF;
}
body .dribbble {
  position: fixed;
  display: block;
  right: 20px;
  bottom: 20px;
}
body .dribbble img {
  display: block;
  height: 28px;
}
body .twitter {
  position: fixed;
  display: block;
  right: 64px;
  bottom: 14px;
}
body .twitter svg {
  width: 32px;
  height: 32px;
  fill: #1da1f2;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">

  <form id="login-form" action="index.php" method="post">
  
    <img style=" margin-left:10px; width:150px;" src="logo.png">

    <h1>Entrer Votre CIN:</h1>
    
    <div class="input email">
        <input type="text" name ="cin" placeholder=" " id="cinInput">
        <label>CIN</label>
    </div>
    
    <button type="submit" disabled id="submitButton">
        <svg viewBox="0 0 16 16">
            <circle stroke-opacity=".1" cx="8" cy="8" r="6"></circle>
            <circle class="load" cx="8" cy="8" r="6"></circle>
        </svg>
        <span>Submit</span>
        
    </button>
</form>
<script>
  const cinInput = document.getElementById('cinInput');
  const submitButton = document.getElementById('submitButton');

  cinInput.addEventListener('keyup', () => {
    submitButton.disabled = cinInput.value.trim() === '';
  });
</script>
</body>

</html>
