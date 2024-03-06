import { defineConfig } from 'astro/config';

// https://astro.build/config 
// export default defineConfig({  build: {
//     inlineStylesheets: 'never'
//   }});

export default defineConfig({ devToolbar: { enabled: false }, build: {inlineStylesheets: 'never'}});
