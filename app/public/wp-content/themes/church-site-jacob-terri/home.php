<?php get_header(); ?>

<h1 class="text-[2rem]">Welcome to our announcements page</h1>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>


return (
    <div className="w-full text-center">
      {/* Header */}
      <header className="bg-[#1B365D] text-white py-4 px-6 flex justify-between items-center">
        <h1 className="text-xl font-bold">Church Logo</h1>
        <nav>
          <ul className="flex space-x-6">
            <li><a href="#about" className="hover:text-[#C9A66B]">About</a></li>
            <li><a href="#services" className="hover:text-[#C9A66B]">Worship</a></li>
            <li><a href="#events" className="hover:text-[#C9A66B]">Events</a></li>
            <li><a href="#sermons" className="hover:text-[#C9A66B]">Sermons</a></li>
            <li><a href="#contact" className="hover:text-[#C9A66B]">Contact</a></li>
          </ul>
        </nav>
      </header>

      {/* Hero Section */}
      <section className="bg-[#F5E9D7] py-16">
        <h1 className="text-4xl font-bold text-[#1B365D]">Welcome to Our Church</h1>
        <p className="text-[#1B365D] mt-4">A family-friendly, bilingual community in Taiwan.</p>
        <Button className="mt-6 bg-[#C9A66B] text-white">Join Us</Button>
      </section>

      {/* About Us */}
      <section id="about" className="bg-[#F8F8F8] py-12">
        <h2 className="text-3xl font-semibold text-[#1B365D]">About Us</h2>
        <p className="text-gray-700 mt-4">Learn more about our mission and values.</p>
      </section>

      {/* Worship Services */}
      <section id="services" className="bg-[#A3B899] py-12 text-white">
        <h2 className="text-3xl font-semibold">Worship Services</h2>
        <p className="mt-4">Join us every Sunday for worship and fellowship.</p>
      </section>

      {/* Events & Small Groups */}
      <section id="events" className="bg-[#F5E9D7] py-12">
        <h2 className="text-3xl font-semibold text-[#1B365D]">Events & Small Groups</h2>
        <p className="text-[#1B365D] mt-4">Get involved in our ministries and activities.</p>
      </section>

      {/* Sermons or Media */}
      <section id="sermons" className="bg-[#F8F8F8] py-12">
        <h2 className="text-3xl font-semibold text-[#1B365D]">Recent Sermons</h2>
        <p className="text-gray-700 mt-4">Watch or listen to our latest messages.</p>
      </section>

      {/* Contact & Giving */}
      <section id="contact" className="bg-[#1B365D] py-12 text-white">
        <h2 className="text-3xl font-semibold">Contact & Giving</h2>
        <p className="mt-4">Find us, get in touch, or support our mission.</p>
        <Button className="mt-6 bg-[#C9A66B] text-white">Give Online</Button>
      </section>
    </div>
  );
}

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ese cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
