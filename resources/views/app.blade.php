<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @inertiaHead
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section class="p-8">
      @inertia
    </section>
  </body>
</html>