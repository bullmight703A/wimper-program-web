<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- SEO Meta Tags -->
	<meta name="description"
		content="The W.I.M.P.E.R. Program is a proprietary Section 125/105 chassis that engineers EBITDA expansion through FICA tax savings without reducing employee take-home pay.">
	<meta name="keywords"
		content="WIMPER, Section 125, FICA tax reduction, EBITDA recapture, corporate wealth strategy, wellness program, payroll tax savings">
	<meta name="author" content="WIMPER Financial Architecture">

	<!-- Open Graph / Social Media Meta Tags -->
	<meta property="og:title" content="W.I.M.P.E.R. | Financial Architecture & EBITDA Expansion">
	<meta property="og:description"
		content="Physical removal of payroll from the FICA taxation zone. Self-funded EBITDA recapture engineered through a compliant Section 125 chassis.">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">

	<!-- Twitter Card Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="W.I.M.P.E.R. | Financial Architecture">
	<meta name="twitter:description"
		content="Self-funded EBITDA recapture engineered through a compliant Section 125 chassis. Reduce your taxable surface area today.">

	<?php wp_head(); ?>

	<!-- Tailwind CSS CDN (Keep Below wp_head to allow enqueue overrides if needed) -->
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						navy: '#1e3a8a', // Corporate Royal Blue
						gold: '#0ea5e9', // Sky Blue Accent
					},
					fontFamily: {
						serif: ['Playfair Display', 'serif'],
						sans: ['Inter', 'sans-serif'],
					}
				}
			}
		}
	</script>

	<!-- Chart.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

	<!-- FontAwesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

	<!-- Custom Styles from User HTML -->
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap');

		body {
			font-family: 'Inter', sans-serif;
			color: #334155;
			background-color: #f8fafc;
			overflow-x: hidden;
		}

		h1,
		h2,
		h3,
		h4,
		h5 {
			font-family: 'Playfair Display', serif;
		}

		/* Corporate Trust Palette (WIMPER Benefits Style) */
		.bg-navy {
			background-color: #1e3a8a;
		}

		/* Royal Blue */
		.text-gold {
			color: #0ea5e9;
		}

		/* Sky Blue Accent */
		.border-gold {
			border-color: #0ea5e9;
		}

		.bg-gold {
			background-color: #0ea5e9;
		}

		.hover-text-gold:hover {
			color: #0ea5e9;
		}

		.text-navy {
			color: #1e3a8a;
		}

		.bg-slate-navy {
			background-color: #172554;
		}

		/* Darker Blue for contrast */

		/* Gradients & Effects */
		.hero-gradient {
			background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
		}

		.glass-panel {
			background: rgba(255, 255, 255, 0.95);
			border: 1px solid #bfdbfe;
			box-shadow: 0 20px 50px -12px rgba(37, 99, 235, 0.15);
		}

		.glow-text {
			text-shadow: 0 0 20px rgba(14, 165, 233, 0.4);
		}

		/* Layout */
		.page-header-spacer {
			padding-top: 140px;
			padding-bottom: 80px;
			background: white;
			border-bottom: 1px solid #e2e8f0;
		}

		/* Navigation */
		.nav-link {
			font-size: 0.7rem;
			letter-spacing: 0.1em;
			text-transform: uppercase;
			font-weight: 700;
			transition: color 0.3s;
			cursor: pointer;
		}

		.nav-link:hover {
			color: #2563eb;
		}

		.nav-link.active {
			color: #2563eb;
			border-bottom: 2px solid #2563eb;
			padding-bottom: 2px;
		}

		/* SPA Page Visibility */
		.page-view {
			display: none;
			animation: fadeIn 0.5s ease-in-out;
		}

		.page-view.active {
			display: block;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(10px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		/* Timeline Line */
		.timeline-line {
			position: absolute;
			left: 28px;
			top: 20px;
			bottom: 0;
			width: 1px;
			background: linear-gradient(to bottom, #2563eb 0%, #cbd5e1 100%);
			z-index: 0;
		}

		/* Connectors for Wealth Flow */
		.step-connector {
			height: 2px;
			background: #e2e8f0;
			flex-grow: 1;
			margin: 0 20px;
			position: relative;
			top: -10px;
		}

		/* Custom Form Styles */
		.custom-form input,
		.custom-form select {
			background-color: #f8fafc;
			border: none;
			border-bottom: 1px solid #cbd5e1;
			border-radius: 0;
			padding: 1rem 0.75rem;
			font-family: 'Playfair Display', serif;
			font-size: 1.1rem;
			color: #1e3a8a;
			transition: all 0.3s ease;
		}

		.custom-form input:focus,
		.custom-form select:focus {
			background-color: #ffffff;
			border-bottom: 1px solid #2563eb;
			outline: none;
		}

		/* Button Overrides */
		.btn-primary {
			background-color: #2563eb;
			color: white;
			transition: all 0.3s;
		}

		.btn-primary:hover {
			background-color: #1e40af;
			shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
		}

		/* Section text overrides for contrast */
		.text-green-highlight {
			color: #10b981;
		}

		/* For positive money numbers */
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class('flex flex-col min-h-screen'); ?>>
	<?php wp_body_open(); ?>

	<!-- NAVIGATION -->
	<nav class="bg-white/95 backdrop-blur-xl border-b border-slate-200 fixed w-full z-50 transition-all duration-300">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex justify-between h-24">
				<div class="flex items-center cursor-pointer"
					onclick="<?php echo is_front_page() ? "navigateTo('home')" : "window.location.href='" . home_url('/') . "'"; ?>">
					<div class="flex flex-col border-l-4 border-gold pl-4 transition hover:border-navy">
						<span
							class="text-xl font-bold text-slate-900 tracking-tight font-serif leading-none">W.I.M.P.E.R.</span>
						<span class="text-[9px] uppercase tracking-[0.1em] text-slate-500 font-semibold mt-1">Wellness &
							Integrated Medical Plan Expense Reimbursement</span>
					</div>
				</div>

				<div class="hidden lg:flex items-center space-x-8">
					<span
						onclick="<?php echo is_front_page() ? "navigateTo('home')" : "window.location.href='" . home_url('/') . "'"; ?>"
						id="nav-home" class="nav-link active text-slate-600">The Vision</span>
					<span
						onclick="<?php echo is_front_page() ? "navigateTo('method')" : "window.location.href='" . home_url('/') . "#method'"; ?>"
						id="nav-method" class="nav-link text-slate-600">The Chassis</span>
					<span
						onclick="<?php echo is_front_page() ? "navigateTo('iul')" : "window.location.href='" . home_url('/') . "#iul'"; ?>"
						id="nav-iul" class="nav-link text-slate-600">Wealth Strategy</span>
					<span
						onclick="<?php echo is_front_page() ? "navigateTo('timeline')" : "window.location.href='" . home_url('/') . "#timeline'"; ?>"
						id="nav-timeline" class="nav-link text-slate-600">The Execution</span>
					<span
						onclick="<?php echo is_front_page() ? "navigateTo('blog')" : "window.location.href='" . home_url('/') . "#blog'"; ?>"
						id="nav-blog" class="nav-link text-slate-600 text-center leading-tight">Insights<br>&
						Blog</span>
					<button
						onclick="<?php echo is_front_page() ? "navigateTo('contact')" : "window.location.href='" . home_url('/') . "#contact'"; ?>"
						class="bg-navy text-white px-6 py-3 rounded-sm text-[10px] font-bold uppercase tracking-[0.2em] hover:bg-gold hover:text-navy transition duration-300 shadow-lg">
						Verify Eligibility
					</button>
				</div>

				<!-- Mobile Menu Button -->
				<div class="lg:hidden flex items-center">
					<button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
						class="text-slate-600 focus:outline-none">
						<i class="fas fa-bars text-2xl"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Mobile Menu -->
		<div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-slate-100">
			<div class="flex flex-col p-4 space-y-4">
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('home')" : "window.location.href='" . home_url('/') . "'"; ?>"
					class="nav-link text-slate-600">The Vision</span>
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('method')" : "window.location.href='" . home_url('/') . "#method'"; ?>"
					class="nav-link text-slate-600">The Chassis</span>
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('iul')" : "window.location.href='" . home_url('/') . "#iul'"; ?>"
					class="nav-link text-slate-600">Wealth Strategy</span>
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('timeline')" : "window.location.href='" . home_url('/') . "#timeline'"; ?>"
					class="nav-link text-slate-600">The Execution</span>
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('blog')" : "window.location.href='" . home_url('/') . "#blog'"; ?>"
					class="nav-link text-slate-600">Insights/Blog</span>
				<span
					onclick="<?php echo is_front_page() ? "navigateTo('contact')" : "window.location.href='" . home_url('/') . "#contact'"; ?>"
					class="nav-link text-blue-600 font-bold">Audit Eligibility</span>
			</div>
		</div>
	</nav>

	<!-- MAIN CONTENT WRAPPER -->
	<main class="min-h-screen">