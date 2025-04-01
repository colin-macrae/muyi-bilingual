module.exports = {
  content: [
    // Add ALL paths where Tailwind classes might exist
    './**/*.php', // Root PHP files
    './wp-content/themes/your-theme/**/*.php', // Theme files
    './wp-content/plugins/**/*.php', // Plugin files (if needed)
    './**/*.html',
    './js/**/*.js',
  ],
  // Enable JIT for dynamic class generation
  mode: 'jit',
  // Optional: Safelist classes that might break
  safelist: ['mx-4', 'mx-6', 'mx-8'], // Add others as needed
};
