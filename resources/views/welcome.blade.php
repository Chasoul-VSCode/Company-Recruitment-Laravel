<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

      {{-- header --}}
      <div
  class="hero min-h-screen"
  style="background-image: url(img/header.jpg);">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="grid auto-cols-max grid-flow-col gap-5 text-center">
        <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
          <span class="countdown font-mono text-5xl">
            <span style="--value:15;"></span>
          </span>
          days
        </div>
        <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
          <span class="countdown font-mono text-5xl">
            <span style="--value:10;"></span>
          </span>
          hours
        </div>
        <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
          <span class="countdown font-mono text-5xl">
            <span style="--value:24;"></span>
          </span>
          min
        </div>
        <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
          <span class="countdown font-mono text-5xl">
            <span style="--value:${counter};"></span>
          </span>
          sec
        </div>
      </div>
    <div class="max-w-md">
      <h1 class="mb-5 text-4xl font-bold">Recruitment Agency</h1>
      <p class="mb-5">
       Front-End Developer | UI-UX Designer
      </p>
      <button class="btn btn-primary">Drop Your CV</button>
    </div>
  </div>
</div>

      {{-- body --}}

</body>
</html>
