<!-- Container -->
<div class="flex flex-wrap min-h-screen w-full content-center justify-center
bg-[url('https://static.vecteezy.com/system/resources/previews/014/402/031/non_2x/people-in-the-restaurant-blurred-background-free-photo.jpg')]
bg-cover py-10">

<!-- Login component -->
<div class="flex shadow-md">
  <!-- Login form -->
  <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
    <div class="w-72">
      <!-- Heading -->
      <h1 class="text-xl font-semibold">Bienvenido</h1>
      <small class="text-gray-400">Por favor inicie sesion</small>

      <!-- Form -->
      <form method="POST" action="{{ route('login') }}" class="mt-4">
        @csrf
        <div class="mb-3">
          <label class="mb-2 block text-xs font-semibold" for="email" :value="__('Email')">Email</label>
          <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
          placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
        </div>

        <div class="mb-3">
          <label class="mb-2 block text-xs font-semibold" for="password" :value="__('Email')">Password</label>
          <input id="password"
                type="password"
                name="password"
                required autocomplete="current-password"
                placeholder="***" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
        </div>

        <div class="mb-3 flex flex-wrap content-center">
          <input id="remember" type="checkbox" class="mr-1 checked:bg-purple-700" /> <label for="remember" class="mr-auto text-xs font-semibold">Recordar Contraseña</label>
          <a href="#" class="text-xs font-semibold text-purple-700">Recuperar contraseña</a>
        </div>

        <div class="mb-3">
            <button class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900
            px-2 py-1.5 rounded-md">Sign in</button>
          </div>
      </form>

      <!-- Footer -->
      <div class="text-center">
        <span class="text-xs text-gray-400 font-semibold">Registrarse</span>
        <a href="#" class="text-xs font-semibold text-purple-700">Sign up</a>
      </div>
    </div>
  </div>

  <!-- Login banner -->
  <div class="flex flex-wrap content-center justify-center rounded-r-md" style="width: 24rem; height: 32rem;">
    <img class="w-full h-full bg-center bg-no-repeat bg-cover rounded-r-md" src="https://img.pikbest.com/backgrounds/20190408/restaurant-poster-background-image-open-at-night_2771856.jpg!w700wp">
  </div>

</div>

<!-- Credit -->
</div>
<script src="https://cdn.tailwindcss.com"></script>