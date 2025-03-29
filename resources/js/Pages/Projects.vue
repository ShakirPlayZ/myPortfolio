<template>
    <div>
      <!-- Hero Section -->
      <section class="text-center py-12 bg-gray-100">
        <h1 class="text-4xl font-bold mb-4">Meine Projekte</h1>
        <p class="text-lg text-gray-700 mb-6">
          Hier erfährst Du mehr über meine Projekte und Fähigkeiten.
        </p>
        <button class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
          Mehr erfahren
        </button>
      </section>
  
      <!-- Projekte Section -->
      <section class="py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Meine Projekte</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Beispiel für eine Projekt-Karte -->
          <div class="bg-white rounded shadow p-4">
            <h3 class="font-bold text-xl mb-2">Projekt 1</h3>
            <p class="text-gray-700">Kurze Beschreibung des Projekts.</p>
          </div>
          <!-- Hier kannst Du weitere Projektkarten einfügen -->
        </div>
      </section>
  
      <!-- Über mich Section -->
      <section class="text-center py-12 bg-gray-100">
        <h2 class="text-3xl font-bold mb-4">Über mich</h2>
        <p class="text-lg text-gray-700 mb-6">
          Ein paar Informationen über mich und meine berufliche Laufbahn.
        </p>
      </section>
    </div>
  </template>
  
  <script>
  import MainLayout from '@/Layouts/MainLayout.vue';

  export default {
    layout: MainLayout,
  }
  </script>
  