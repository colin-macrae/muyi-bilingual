module.exports = {
  content: [
    // Target only necessary directories (avoid scanning node_modules)
    './**/*.html', // Root HTML files
    './src/**/*.{html,js,php}', // Project-specific files (adjust './src' to your theme folder)
    './wp-content/themes/your-theme/**/*.php', // Theme files (replace 'your-theme' with actual name)
    './js/**/*.js', // Custom JS files
  ],
  mode: 'jit', // Keep JIT for faster builds
  safelist: [
    // Add dynamic classes (e.g., if using WordPress-generated classes)
    { pattern: /^bg-/, variants: ['hover', 'focus'] }, // Example: all bg-* classes
  ],
};
