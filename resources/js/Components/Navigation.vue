<template>  
  <nav class="sticky top-0 z-10 backdrop-blur-md bg-white/70 dark:bg-slate-900/70 border-b border-slate-200 dark:border-slate-700">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <div class="font-bold text-xl">
        <span class="text-emerald-600 dark:text-emerald-400">Portfolio - Manuel Höhn</span>
      </div>
      <div class="flex items-center gap-6">
        <Link href="#about" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Über mich</Link>
        <Link href="#skills" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Skills</Link>
        <Link href="#projects" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Projekte</Link>
        <Link href="#contact" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Kontakt</Link>
        <button @click="toggleDarkMode" class="p-2 rounded-full hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
          <sun-icon v-if="isDarkMode" class="h-5 w-5" />
          <moon-icon v-else class="h-5 w-5" />
        </button>
      </div>
    </div>
  </nav>
</template>

<script setup>
  import { Link } from '@inertiajs/inertia-vue3';
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
  import { ref } from 'vue';

  defineProps({
    toggleDarkMode: Function,
    isDarkMode: Boolean
  })
</script>
