module.exports = {
  proxy: 'http://church-site-jacob-terri.local',
  files: [
    '**/*.php', // Watch PHP files
    './dist/output.css', // Explicitly watch Tailwind's output
  ],
  port: 3000,
  open: false,
  notify: false,
  reloadDelay: 500, // Add slight delay to ensure CSS rebuild finishes
};
