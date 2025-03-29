<template>
  <div id="top" class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100 dark:from-slate-900 dark:to-slate-800 text-slate-800 dark:text-slate-100">
    <!-- Navigation -->
    <Navigation 
      :toggleDarkMode="toggleDarkMode"
      :isDarkMode="isDarkMode"
    />

    <!-- Hero Section -->
    <section id="about" class="py-20 md:py-32">
      <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12">
          <div class="md:w-1/2">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
              Hi, ich bin <span class="text-emerald-600 dark:text-emerald-400">Manuel Höhn</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-600 dark:text-slate-300 mb-8">
              UI/UX Designer & Frontend Developer
            </p>
            <p class="text-slate-600 dark:text-slate-300 mb-8 leading-relaxed">
              Ich erschaffe ansprechende, funktionale und nutzerzentrierte digitale Erlebnisse. Mit einem Fokus auf User Interface Design und Frontend-Entwicklung erwecke ich Ideen durch Code und Kreativität zum Leben.
            </p>
            <div class="flex gap-4">
              <a href="#contact" class="px-6 py-3 bg-emerald-600 hover:bg-emerald-700 dark:bg-emerald-500 dark:hover:bg-emerald-600 text-white rounded-lg transition-colors">
                Kontakt aufnehmen
              </a>
              <a href="#projects" class="px-6 py-3 border border-slate-300 dark:border-slate-600 hover:border-emerald-600 dark:hover:border-emerald-400 rounded-lg transition-colors">
                Projekte ansehen
              </a>
            </div>
          </div>
          <div class="md:w-1/2 flex justify-center">
            <div class="relative">
              <div class="w-64 h-64 md:w-80 md:h-80 rounded-full bg-emerald-100 dark:bg-emerald-900/30 overflow-hidden">
                <img :src="'/images/me.png'" alt="Profilbild" class="w-full h-full object-cover" />
              </div>
              <div class="absolute -bottom-4 -right-4 bg-white dark:bg-slate-800 p-4 rounded-lg shadow-lg">
                <code-icon class="h-8 w-8 text-emerald-600 dark:text-emerald-400" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-white dark:bg-slate-800">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center">Meine Skills & Erfahrungen</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="p-6 border border-slate-200 dark:border-slate-700 rounded-lg hover:shadow-md transition-shadow">
            <layout-icon class="h-10 w-10 text-emerald-600 dark:text-emerald-400 mb-4" />
            <h3 class="text-xl font-semibold mb-3">UI/UX Design</h3>
            <p class="text-slate-600 dark:text-slate-300">
              Schaffen von intuitiven und ansprechenden Benutzererlebnissen durch durchdachtes Schnittstellendesign, Wireframing und Prototyping.
            </p>
          </div>
          <div class="p-6 border border-slate-200 dark:border-slate-700 rounded-lg hover:shadow-md transition-shadow">
            <code-icon class="h-10 w-10 text-emerald-600 dark:text-emerald-400 mb-4" />
            <h3 class="text-xl font-semibold mb-3">Frontend Development</h3>
            <p class="text-slate-600 dark:text-slate-300">
              Erstellen reaktionsschneller und leistungsstarker Webanwendungen mit modernen Frameworks wie Vue.js, React und Tailwind CSS.
            </p>
          </div>
          <div class="p-6 border border-slate-200 dark:border-slate-700 rounded-lg hover:shadow-md transition-shadow">
            <git-branch-icon class="h-10 w-10 text-emerald-600 dark:text-emerald-400 mb-4" />
            <h3 class="text-xl font-semibold mb-3">Version Control</h3>
            <p class="text-slate-600 dark:text-slate-300">
              Effizientes Verwalten von Code mit Git und GitHub, Sicherstellen einer kollaborativen Entwicklung und ordnungsgemäßer Versionsverfolgung.
            </p>
          </div>
        </div>
        
        <div class="mt-16">
          <h3 class="text-xl font-semibold mb-6 text-center">Technologien mit denen ich am liebsten Arbeite</h3>
          <div class="flex flex-wrap justify-center gap-4">
            <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 rounded-full">Vue.js</span>
            <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 rounded-full">React</span>
            <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 rounded-full">Tailwind CSS</span>
            <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 rounded-full">JavaScript</span>
            <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 rounded-full">TypeScript</span>
            <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 rounded-full">Figma</span>
            <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 rounded-full">HTML/CSS</span>
            <span class="px-4 py-2 bg-slate-100 dark:bg-slate-700 rounded-full">Git</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4 text-center">Meine GitHub Projekte</h2>
        <p class="text-slate-600 dark:text-slate-300 text-center mb-12 max-w-2xl mx-auto">
          Eine Präsentation meiner jüngsten Arbeiten und Open-Source-Beiträge. Jedes Projekt repräsentiert meine Fähigkeiten und meinen Ansatz zur Problemlösung.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Project 1 -->
          <div class="border border-slate-200 dark:border-slate-700 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
            <div class="h-48 overflow-hidden">
              <img :src="'/images/last-revenge.png'" alt="Project 1" class="w-full h-full object-cover" />
            </div>
            <div class="p-6">
              <div class="flex justify-between items-start mb-4">
                <h3 class="text-xl font-semibold">Last Revenge Multigaming</h3>
                <github-icon class="h-5 w-5 text-slate-600 dark:text-slate-300" />
              </div>
              <p class="text-slate-600 dark:text-slate-300 mb-4">
                Eine kleine Webseite für eine Multigaming Plattform
              </p>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">React</span>
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">TailwindCSS</span>
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">TypeScript</span>
              </div>
              <!--a href="#" class="text-emerald-600 dark:text-emerald-400 hover:underline inline-flex items-center gap-1">
                View repository <external-link-icon class="h-4 w-4" />
              </a-->
            </div>
          </div>
          
          <!-- Project 2 -->
          <div class="border border-slate-200 dark:border-slate-700 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
            <div class="h-48 overflow-hidden">
              <img :src="'/images/the-forgotten-city.png'" alt="The Forgotten City" class="w-full h-full object-cover" />
            </div>
            <div class="p-6">
              <div class="flex justify-between items-start mb-4">
                <h3 class="text-xl font-semibold">The Forgotten City</h3>
                <github-icon class="h-5 w-5 text-slate-600 dark:text-slate-300" />
              </div>
              <p class="text-slate-600 dark:text-slate-300 mb-4">
                Eine Webseite rund um das Thema GTA5 Roleplay.
              </p>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">React</span>
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">TailwindCSS</span>
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">TypeScript</span>
              </div>
              <!--a href="#" class="text-emerald-600 dark:text-emerald-400 hover:underline inline-flex items-center gap-1">
                View repository <external-link-icon class="h-4 w-4" />
              </a-->
            </div>
          </div>
          
          <!-- Project 3 -->
          <div class="border border-slate-200 dark:border-slate-700 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
            <div class="h-48 overflow-hidden">
              <img :src="'/images/haushaltsrechner.png'" alt="MyBudgetCalculator" class="w-full h-full object-cover" />
            </div>
            <div class="p-6">
              <div class="flex justify-between items-start mb-4">
                <h3 class="text-xl font-semibold">MyBudgetCalculator</h3>
                <github-icon class="h-5 w-5 text-slate-600 dark:text-slate-300" />
              </div>
              <p class="text-slate-600 dark:text-slate-300 mb-4">
                MyBudgetCalculator ist eine webbasierte Anwendung zur effizienten Verwaltung von Finanzen. 
                Hier wurde das Augenmerk auf Usability gelegt, sodass der Nutzer das Tool leichter nutzen kann. 
                Nutzer können ihre Einnahmen und Ausgaben überwachen, Budgets erstellen und ihre finanzielle Situation jederzeit im Blick behalten.
              </p>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">Vue.js</span>
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">Inertia.js</span>
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">TailwindCSS</span>
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">Vite</span>
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">Laravel</span>
                <span class="px-2 py-1 text-xs bg-slate-100 dark:bg-slate-700 rounded">MySQL</span>
              </div>
              <a href="https://github.com/ShakirPlayZ/MyBudgetCalculator" target="_blank" class="text-emerald-600 dark:text-emerald-400 hover:underline inline-flex items-center gap-1">
                Github Projekt ansehen <external-link-icon class="h-4 w-4" />
              </a>
            </div>
          </div>
        </div>
        
        <div class="mt-12 text-center">
          <a href="https://github.com/ShakirPlayZ" class="inline-flex items-center gap-2 px-6 py-3 border border-slate-300 dark:border-slate-600 hover:border-emerald-600 dark:hover:border-emerald-400 rounded-lg transition-colors">
            <github-icon class="h-5 w-5" />
            Alle Projekte auf Github ansehen
          </a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white dark:bg-slate-800">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center">Kontakt</h2>
        <div class="max-w-3xl mx-auto">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <h3 class="text-xl font-semibold mb-4">Kontakt Informationen</h3>
              <div class="space-y-4">
                <div class="flex items-center gap-3">
                  <mail-icon class="h-5 w-5 text-emerald-600 dark:text-emerald-400" />
                  <span>mhoehn@live.de</span>
                </div>
                <div class="flex items-center gap-3">
                  <map-pin-icon class="h-5 w-5 text-emerald-600 dark:text-emerald-400" />
                  <span>34311 Naumburg (Hessen)</span>
                </div>
              </div>
              
              <h3 class="text-xl font-semibold mt-8 mb-4">Social Media</h3>
              <div class="flex gap-4">
                <a href="https://github.com/ShakirPlayZ" class="p-2 bg-slate-100 dark:bg-slate-700 rounded-full hover:bg-emerald-100 dark:hover:bg-emerald-900/30 transition-colors">
                  <github-icon class="h-5 w-5" />
                </a>
                <a href="https://www.linkedin.com/in/manuel-h%C3%B6hn-31b94616a/" class="p-2 bg-slate-100 dark:bg-slate-700 rounded-full hover:bg-emerald-100 dark:hover:bg-emerald-900/30 transition-colors">
                  <linkedin-icon class="h-5 w-5" />
                </a>
              </div>
            </div>
            
            <div>
              <h3 class="text-xl font-semibold mb-4">Nachricht verfassen</h3>
              <form class="space-y-4">
                <div>
                  <label for="name" class="block text-sm font-medium mb-1">Name</label>
                  <input type="text" id="name" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg bg-white dark:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                </div>
                <div>
                  <label for="email" class="block text-sm font-medium mb-1">Email</label>
                  <input type="email" id="email" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg bg-white dark:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                </div>
                <div>
                  <label for="message" class="block text-sm font-medium mb-1">Nachricht</label>
                  <textarea id="message" rows="4" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg bg-white dark:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500"></textarea>
                </div>
                <button type="submit" class="w-full px-6 py-3 bg-emerald-600 hover:bg-emerald-700 dark:bg-emerald-500 dark:hover:bg-emerald-600 text-white rounded-lg transition-colors">
                  Nachricht senden
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-slate-200 dark:border-slate-700">
      <div class="container mx-auto px-4 text-center">
        <p class="text-slate-600 dark:text-slate-300">
          © {{ new Date().getFullYear() }} Manuel Höhn. All rights reserved.
        </p>

        <a href="#top">
          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7 7.674 1.3a.91.91 0 0 0-1.348 0L1 7"></path>
          </svg>
        </a>
      </div>
    </footer>
  </div>
</template>

<script setup>
  import { ref } from 'vue';
  import { 
    Sun as SunIcon, 
    Moon as MoonIcon, 
    Code as CodeIcon, 
    Layout as LayoutIcon, 
    GitBranch as GitBranchIcon,
    Github as GithubIcon,
    ExternalLink as ExternalLinkIcon,
    Mail as MailIcon,
    Phone as PhoneIcon,
    MapPin as MapPinIcon,
    Linkedin as LinkedinIcon,
    Twitter as TwitterIcon,
    Dribbble as DribbbleIcon
  } from 'lucide-vue-next';
  import Navigation from '../Components/Navigation.vue';

  // Dark mode toggle
  const isDarkMode = ref(false);

  const toggleDarkMode = () => {
    isDarkMode.value = !isDarkMode.value;
    if (isDarkMode.value) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  };

  // Check system preference on mount
  if (typeof window !== 'undefined') {
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      isDarkMode.value = true;
      document.documentElement.classList.add('dark');
    }
  }
</script>

<style>
  /* Add any global styles here */
  html {
    scroll-behavior: smooth;
  }

  /* For dark mode */
  .dark {
    color-scheme: dark;
  }
</style>