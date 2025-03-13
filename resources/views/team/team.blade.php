@extends('layouts.navbar')
@section('content')
<div class="team-page">
  <!-- Hero Section -->
  <div class="team-hero">
    <div class="container">
      <div class="hero-content">
        <h1 class="hero-title">Our Team</h1>
        <p class="hero-subtitle">Talented professionals committed to excellence and innovation</p>
      </div>
    </div>
  </div>

  <!-- Leadership Section -->
  <section class="leadership-section">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">Leadership</span>
        <h2 style="color: white;" class="section-title">Executive Team</h2>
        <p class="section-description text-gray-400">Meet the visionaries guiding our company's future</p>
      </div>

      <div class="leadership-grid">
        @foreach($executiveTeam as $executive)
        <div class="leadership-card bg-gradient-to-br from-gray-700 to-gray-800 shadow-lg shadow-green-400 border-[1px] border-green-400">
          <div class="card-image">
            <img src="{{ asset('images-team/'.$executive['images']) }}" alt="{{ $executive['position'] }}">
          </div>
          <div class="card-content">
            <h3 class="exec-name text-white">{{ $executive['name'] }}</h3>
            <span class="exec-position text-gray-400 ">{{ $executive['title'] }}</span>
            <!-- <p class="exec-bio text-gray-400">{{ $executive['bio'] }}</p> -->
            <div class="social-links">
              <a href="#" class="social-link linkedin" aria-label="LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="social-link twitter" aria-label="Twitter Profile"><i class="fab fa-twitter"></i></a>
              <a href="#" class="social-link email" aria-label="Email Contact"><i class="far fa-envelope"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Departments Section -->
  <section class="departments-section">
    <div class="container">
      <div class="section-header">
        <span class="section-tag text-white">Departments</span>
        <h2 style="color: white;" class="section-title text-white">Our Expertise</h2>
        <p class="section-description text-gray-400">Specialized teams working together to achieve excellence</p>
      </div>

      <div class="department-grid">
        @foreach($departments as $name => $department)
        <div class="department-card bg-gradient-to-br from-gray-700 to-gray-800 shadow-lg shadow-green-400 border-[1px] border-green-400">
          <div class="department-icon">
            <i class="fas {{ $department['icon'] }}"></i>
          </div>
          <h3 class="department-name text-white">{{ $name }}</h3>
          <p class="department-description text-gray-400">{{ $department['description'] }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Team Members Section -->
  <section class="team-members-section">
    <div class="container">
      <div class="section-header">
        <span style="color: white;" class="section-tag">Our People</span>
        <h2 style="color: white;" class="section-title">Meet the Team</h2>
        <p class="section-description text-gray-400">The talented individuals behind our success</p>
      </div>

      <div class="team-filter">
        <button class="filter-btn active" data-filter="all">All</button>
        @foreach($departments as $name => $department)
        <button class="filter-btn text-white" data-filter="{{ strtolower(str_replace(' ', '-', $name)) }}">{{ $name }}</button>
        @endforeach
      </div>

      <div class="team-grid">
        @foreach($teamMembers as $member)
        <div class="team-member-card bg-gradient-to-br from-gray-700 to-gray-800 shadow-lg shadow-green-400 border-[1px] border-green-400" data-category="{{ strtolower(str_replace(' ', '-', $member['department'])) }}">
          <div class="member-image">
            <img src="{{ asset('images-team/'.$member['image']) }}" alt="{{ $member['name'] }}">
            <!-- <div class="member-overlay">
              <p class="member-bio">{{ $member['bio'] }}</p>
            </div> -->
          </div>
          <div class="member-info">
            <h4 class="member-name text-white">{{ $member['name'] }}</h4>
            <!-- <span class="member-position text-gray-400">{{ $member['position'] }}</span> -->
            <span class="member-department text-gray-400">{{ $member['nama-jabatan'] }}</span>
            <div class="social-links">
              <a href="#" class="social-link linkedin" aria-label="LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="social-link email" aria-label="Email Contact"><i class="far fa-envelope"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  @include('layouts.footer')
</div>

<style>
  /* Global Styles */

  .team-page {
    font-family: 'Inter', sans-serif;
    color: #333;
    /* background-color: black; */
  }

  .team-page {
    font-family: 'Inter', sans-serif;
    color: #333;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
  }

  /* Hero Section */
  .team-hero {
    padding: 120px 0 100px;
    text-align: center;
    color: white;
    position: relative;
    overflow: hidden;
  }

  .team-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
    opacity: 0.3;
  }

  .hero-content {
    position: relative;
    z-index: 1;
  }

  .hero-title {
    font-size: 4rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
    letter-spacing: -0.02em;
  }

  .hero-subtitle {
    font-size: 1.5rem;
    font-weight: 400;
    max-width: 700px;
    margin: 0 auto;
    opacity: 0.9;
  }

  /* Section Styles */
  section {
    padding: 100px 0;
  }

  .section-header {
    text-align: center;
    margin-bottom: 60px;
  }

  .section-tag {
    display: inline-block;
    background-color: green;
    color: white;
    padding: 8px 16px;
    border-radius: 30px;
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 1.5rem;
  }

  .section-title {
    font-size: 2.75rem;
    font-weight: 800;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
  }

  .section-description {
    font-size: 1.125rem;
    max-width: 700px;
    margin: 0 auto;
  }

  /* Leadership Section */
  .leadership-section {}

  .leadership-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 40px;
    max-width: 800px;
    margin: 0 auto;
  }

  .leadership-card {
    /* background: black; */
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }

  .leadership-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  }

  .card-image img {
    width: 100%;
    height: 300px;
    object-fit: cover;
  }

  .card-content {
    padding: 1.5rem;
    text-align: center;
  }

  .exec-name {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
  }

  .exec-position {
    font-weight: 600;
    display: block;
    margin-bottom: 0.75rem;
  }

  .exec-bio {
    line-height: 1.5;
    margin-bottom: 1rem;
    font-size: 0.9rem;
  }

  /* Departments Section */
  .departments-section {
    /* background-color: black; */
  }

  .department-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
    gap: 30px;
  }

  .department-card {
    padding: 2.5rem 2rem;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }

  .department-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  }

  .department-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 1.5rem;
    background: linear-gradient(135deg, #10b981, #059669);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.75rem;
  }

  .department-name {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 1rem;
  }

  .department-description {
    line-height: 1.6;
  }

  /* Team Members Section */
  .team-members-section {
    /* background-color: black; */
  }

  .team-filter {
    display: flex;
    justify-content: center;
    margin-bottom: 40px;
    flex-wrap: wrap;
    gap: 10px;
  }

  .filter-btn {
    background: none;
    border: none;
    padding: 8px 16px;
    border-radius: 30px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .filter-btn:hover {
    color: #10b981;
  }

  .filter-btn.active {
    background-color: green;
    color: white;
  }

  .team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
    gap: 30px;
  }

  .team-member-card {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }

  .team-member-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  }

  .member-image {
    position: relative;
    overflow: hidden;
  }

  .member-image img {
    width: 100%;
    height: 320px;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .team-member-card:hover .member-image img {
    transform: scale(1.05);
  }

  .member-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(16, 185, 129, 0.85);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .team-member-card:hover .member-overlay {
    opacity: 1;
  }

  .member-bio {
    color: white;
    text-align: center;
    line-height: 1.6;
  }

  .member-info {
    padding: 1.5rem;
    text-align: center;
  }

  .member-name {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
  }

  .member-position {
    font-weight: 600;
    display: block;
    margin-bottom: 0.25rem;
  }

  .member-department {
    font-size: 0.875rem;
    display: block;
    margin-bottom: 1rem;
  }

  /* Social Links */
  .social-links {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 0.75rem;
  }

  .social-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #f3f4f6;
    color: #4b5563;
    transition: all 0.3s ease;
  }

  .social-link:hover {
    background: #10b981;
    color: white;
  }

  .social-link.linkedin:hover {
    background: #0077b5;
  }

  .social-link.twitter:hover {
    background: #1da1f2;
  }

  .social-link.email:hover {
    background: #ea4335;
  }

  /* Join Team Section */
  .join-team-section {
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    text-align: center;
  }

  .join-content {
    max-width: 700px;
    margin: 0 auto;
  }

  .join-content h2 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 1.5rem;
  }

  .join-content p {
    font-size: 1.125rem;
    margin-bottom: 2rem;
    opacity: 0.9;
  }

  .btn-careers {
    display: inline-block;
    background-color: white;
    color: #10b981;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .btn-careers:hover {
    background-color: #f3f4f6;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }

  /* Responsive Styles */
  @media (max-width: 768px) {
    section {
      padding: 70px 0;
    }

    .hero-title {
      font-size: 2.5rem;
    }

    .section-title {
      font-size: 2rem;
    }

    .team-hero {
      padding: 80px 0 60px;
    }

    .leadership-grid {
      max-width: 100%;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }
  }

  @media (max-width: 480px) {
    .hero-title {
      font-size: 2rem;
    }

    .hero-subtitle {
      font-size: 1.125rem;
    }

    .section-title {
      font-size: 1.75rem;
    }

    .leadership-grid,
    .department-grid,
    .team-grid {
      grid-template-columns: 1fr;
    }
  }

  /* Animation for card hover */
  @keyframes pulseGlow {
    0% {
      box-shadow: 0 10px 25px rgba(16, 185, 129, 0.1);
    }

    50% {
      box-shadow: 0 15px 35px rgba(16, 185, 129, 0.2);
    }

    100% {
      box-shadow: 0 10px 25px rgba(16, 185, 129, 0.1);
    }
  }

  .leadership-card:hover,
  .department-card:hover,
  .team-member-card:hover {
    animation: pulseGlow 2s infinite;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Team filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const teamCards = document.querySelectorAll('.team-member-card');

    filterButtons.forEach(button => {
      button.addEventListener('click', function() {
        // Update active button
        filterButtons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');

        const filter = this.getAttribute('data-filter');

        // Filter team members
        teamCards.forEach(card => {
          if (filter === 'all' || card.getAttribute('data-category') === filter) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  });
</script>
@endsection