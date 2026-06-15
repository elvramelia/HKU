<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKU - Boiler & Sparepart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', Arial, sans-serif;
            color: #1a1a2e;
            overflow-x: hidden;
        }

        /* ===== TOP BAR ===== */
        .top-bar {
            background: #0a1628;
            color: #cbd5e1;
            font-size: 0.8rem;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .top-bar a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s;
        }

        .top-bar a:hover {
            color: #ef4444;
        }

        .top-bar i {
            color: #ef4444;
        }

        /* ===== NAVBAR ===== */
        .main-navbar {
            background: #ffffff;
            box-shadow: 0 2px 20px rgba(0,0,0,0.08);
            padding: 0;
            position: sticky;
            top: 0;
            z-index: 1050;
        }

        .main-navbar .navbar-brand {
            font-weight: 800;
            font-size: 1.6rem;
            color: #0a1628;
            letter-spacing: -0.5px;
        }

        .main-navbar .navbar-brand span {
            color: #ef4444;
        }

        .main-navbar .nav-link {
            color: #334155;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            padding: 22px 18px !important;
            position: relative;
            transition: color 0.3s;
        }

        .main-navbar .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: #ef4444;
            border-radius: 3px 3px 0 0;
            transition: width 0.3s ease;
        }

        .main-navbar .nav-link:hover,
        .main-navbar .nav-link.active {
            color: #ef4444;
        }

        .main-navbar .nav-link:hover::after,
        .main-navbar .nav-link.active::after {
            width: 70%;
        }

        .nav-cta {
            background: #ef4444 !important;
            color: #ffffff !important;
            border-radius: 8px !important;
            padding: 10px 24px !important;
            margin: 10px 0 10px 10px;
            font-weight: 600 !important;
            text-transform: uppercase !important;
            font-size: 0.8rem !important;
            letter-spacing: 0.5px;
            transition: background 0.3s, transform 0.3s !important;
        }

        .nav-cta:hover {
            background: #dc2626 !important;
            transform: translateY(-1px);
        }

        .nav-cta::after {
            display: none !important;
        }

        /* ===== HERO ===== */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            background: #0a1628;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('https://images.unsplash.com/photo-1565008447742-97f6f38c985c?q=80&w=2000') center/cover;
            opacity: 0.15;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            right: -5%;
            top: 10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(239,68,68,0.15) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(239,68,68,0.1);
            border: 1px solid rgba(239,68,68,0.3);
            color: #ef4444;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 24px;
        }

        .hero-badge i {
            font-size: 0.7rem;
        }

        .hero-title {
            font-size: clamp(2.2rem, 5vw, 3.8rem);
            font-weight: 900;
            color: #ffffff;
            line-height: 1.1;
            margin-bottom: 10px;
            letter-spacing: -1px;
        }

        .hero-title .highlight {
            color: #ef4444;
            position: relative;
        }

        .hero-subtitle {
            font-size: clamp(1rem, 2vw, 1.4rem);
            color: #94a3b8;
            font-weight: 300;
            margin-bottom: 12px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .hero-desc {
            color: #94a3b8;
            font-size: 1.05rem;
            line-height: 1.7;
            max-width: 520px;
            margin-bottom: 36px;
        }

        .hero-buttons {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        .btn-hero-primary {
            background: #ef4444;
            color: #fff;
            border: none;
            padding: 14px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-hero-primary:hover {
            background: #dc2626;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(239,68,68,0.3);
        }

        .btn-hero-secondary {
            background: transparent;
            color: #ffffff;
            border: 2px solid rgba(255,255,255,0.2);
            padding: 12px 36px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-hero-secondary:hover {
            border-color: #ffffff;
            color: #ffffff;
            background: rgba(255,255,255,0.05);
        }

        .hero-image-col {
            position: relative;
        }

        .hero-image-wrapper {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0,0,0,0.4);
        }

        .hero-image-wrapper img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
        }

        .hero-image-wrapper::after {
            content: '';
            position: absolute;
            inset: 0;
            border: 2px solid rgba(239,68,68,0.3);
            border-radius: 20px;
            pointer-events: none;
        }

        .hero-stat-float {
            position: absolute;
            bottom: -20px;
            left: -30px;
            background: #ffffff;
            color: #0a1628;
            padding: 16px 24px;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .hero-stat-float .stat-icon {
            width: 48px;
            height: 48px;
            background: rgba(239,68,68,0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ef4444;
            font-size: 1.3rem;
        }

        .hero-stat-float .stat-number {
            font-weight: 800;
            font-size: 1.4rem;
            line-height: 1;
        }

        .hero-stat-float .stat-label {
            font-size: 0.75rem;
            color: #64748b;
            font-weight: 500;
        }

        /* ===== STATS BAR ===== */
        .stats-bar {
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            padding: 40px 0;
        }

        .stat-item {
            text-align: center;
            padding: 16px;
        }

        .stat-item .stat-num {
            font-size: 2.2rem;
            font-weight: 900;
            color: #0a1628;
            line-height: 1;
        }

        .stat-item .stat-num span {
            color: #ef4444;
        }

        .stat-item .stat-text {
            color: #64748b;
            font-size: 0.85rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 6px;
        }

        /* ===== SECTION COMMON ===== */
        .section-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #ef4444;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .section-tag::before {
            content: '';
            width: 30px;
            height: 2px;
            background: #ef4444;
            border-radius: 2px;
        }

        .section-title {
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            font-weight: 800;
            color: #0a1628;
            line-height: 1.2;
            letter-spacing: -0.5px;
            margin-bottom: 16px;
        }

        .section-desc {
            color: #64748b;
            font-size: 1.05rem;
            line-height: 1.7;
            max-width: 600px;
        }

        /* ===== SERVICES ===== */
        .services-section {
            padding: 100px 0;
            background: #f8fafc;
        }

        .service-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 36px 28px;
            height: 100%;
            border: 1px solid #e2e8f0;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: #ef4444;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.08);
            border-color: transparent;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-icon {
            width: 64px;
            height: 64px;
            background: rgba(239,68,68,0.08);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            color: #ef4444;
            margin-bottom: 20px;
            transition: all 0.4s;
        }

        .service-card:hover .service-icon {
            background: #ef4444;
            color: #ffffff;
            transform: scale(1.05);
        }

        .service-card h5 {
            font-weight: 700;
            color: #0a1628;
            margin-bottom: 12px;
            font-size: 1.1rem;
        }

        .service-card p {
            color: #64748b;
            font-size: 0.9rem;
            line-height: 1.6;
            margin: 0;
        }

        /* ===== PRODUCTS ===== */
        .products-section {
            padding: 100px 0;
            background: #ffffff;
        }

        .product-card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            transition: all 0.4s ease;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
            border-color: transparent;
        }

        .product-img {
            height: 220px;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s;
        }

        .product-card:hover .product-img img {
            transform: scale(1.08);
        }

        .product-badge {
            position: absolute;
            top: 14px;
            left: 14px;
            background: #ef4444;
            color: #fff;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 6px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .product-body {
            padding: 22px;
        }

        .product-category {
            color: #ef4444;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .product-body h5 {
            font-weight: 700;
            color: #0a1628;
            font-size: 1rem;
            margin-bottom: 8px;
        }

        .product-body p {
            color: #64748b;
            font-size: 0.85rem;
            line-height: 1.5;
            margin: 0;
        }

        /* ===== ABOUT PREVIEW ===== */
        .about-preview {
            padding: 100px 0;
            background: #0a1628;
            color: #ffffff;
            position: relative;
            overflow: hidden;
        }

        .about-preview::before {
            content: '';
            position: absolute;
            right: -20%;
            top: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(239,68,68,0.08) 0%, transparent 70%);
            border-radius: 50%;
        }

        .about-preview .section-tag {
            color: #ef4444;
        }

        .about-preview .section-title {
            color: #ffffff;
        }

        .about-preview .section-desc {
            color: #94a3b8;
        }

        .about-feature {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 20px;
        }

        .about-feature-icon {
            width: 44px;
            height: 44px;
            min-width: 44px;
            background: rgba(239,68,68,0.15);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ef4444;
            font-size: 1.1rem;
        }

        .about-feature h6 {
            font-weight: 700;
            margin-bottom: 4px;
            font-size: 0.95rem;
        }

        .about-feature p {
            color: #94a3b8;
            font-size: 0.85rem;
            margin: 0;
            line-height: 1.5;
        }

        .about-image-box {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
        }

        .about-image-box img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            border-radius: 20px;
        }

        .about-image-box::after {
            content: '';
            position: absolute;
            inset: 0;
            border: 2px solid rgba(239,68,68,0.25);
            border-radius: 20px;
            pointer-events: none;
        }

        .experience-badge {
            position: absolute;
            bottom: 24px;
            right: 24px;
            background: #ef4444;
            color: #fff;
            padding: 16px 24px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(239,68,68,0.4);
        }

        .experience-badge .exp-num {
            font-size: 2rem;
            font-weight: 900;
            line-height: 1;
        }

        .experience-badge .exp-text {
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* ===== CTA ===== */
        .cta-section {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: #ffffff;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            right: -10%;
            top: -50%;
            width: 400px;
            height: 400px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
        }

        .cta-section h2 {
            font-weight: 800;
            font-size: 2rem;
            margin-bottom: 16px;
        }

        .cta-section p {
            opacity: 0.9;
            font-size: 1.05rem;
            max-width: 500px;
        }

        .btn-cta-white {
            background: #ffffff;
            color: #ef4444;
            border: none;
            padding: 14px 36px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-cta-white:hover {
            background: #0a1628;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
        }

        /* ===== CLIENTS / BRANDS ===== */
        .brands-section {
            padding: 60px 0;
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
        }

        .brands-section h6 {
            color: #94a3b8;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .brand-logo {
            height: 40px;
            opacity: 0.35;
            filter: grayscale(100%);
            transition: all 0.4s;
        }

        .brand-logo:hover {
            opacity: 1;
            filter: grayscale(0%);
        }

        /* ===== PAGE HEADER ===== */
        .page-header {
            background: #0a1628;
            padding: 60px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('https://images.unsplash.com/photo-1565008447742-97f6f38c985c?q=80&w=2000') center/cover;
            opacity: 0.08;
        }

        .page-header::after {
            content: '';
            position: absolute;
            right: -10%;
            bottom: -50%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(239,68,68,0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .page-header h1 {
            font-weight: 800;
            color: #ffffff;
            font-size: 2.2rem;
            letter-spacing: -0.5px;
        }

        .page-header .breadcrumb {
            margin-bottom: 0;
        }

        .page-header .breadcrumb-item a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .page-header .breadcrumb-item a:hover {
            color: #ef4444;
        }

        .page-header .breadcrumb-item.active {
            color: #ef4444;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .page-header .breadcrumb-item + .breadcrumb-item::before {
            color: #475569;
        }

        /* ===== ABOUT PAGE ===== */
        .about-section {
            padding: 80px 0;
        }

        .about-logo-box {
            background: #f8fafc;
            border-radius: 20px;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #e2e8f0;
            height: 300px;
        }

        .about-logo-box img {
            max-width: 200px;
        }

        .about-text h2 {
            font-weight: 800;
            color: #0a1628;
            margin-bottom: 16px;
        }

        .about-text p {
            color: #475569;
            line-height: 1.8;
            font-size: 0.95rem;
        }

        .vision-mission {
            padding: 80px 0;
            background: #f8fafc;
        }

        .vm-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 40px;
            height: 100%;
            border: 1px solid #e2e8f0;
            transition: all 0.3s;
        }

        .vm-card:hover {
            box-shadow: 0 15px 40px rgba(0,0,0,0.06);
        }

        .vm-icon {
            width: 56px;
            height: 56px;
            background: rgba(239,68,68,0.08);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ef4444;
            font-size: 1.4rem;
            margin-bottom: 20px;
        }

        .vm-card h4 {
            font-weight: 700;
            color: #0a1628;
            margin-bottom: 14px;
        }

        .vm-card p {
            color: #64748b;
            font-size: 0.9rem;
            line-height: 1.7;
        }

        /* ===== CONTACT PAGE ===== */
        .contact-section {
            padding: 80px 0;
        }

        .contact-info-card {
            background: #0a1628;
            color: #ffffff;
            border-radius: 20px;
            padding: 40px;
            height: 100%;
        }

        .contact-info-card h4 {
            font-weight: 700;
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 24px;
        }

        .contact-item-icon {
            width: 44px;
            height: 44px;
            min-width: 44px;
            background: rgba(239,68,68,0.15);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ef4444;
            font-size: 1rem;
        }

        .contact-item h6 {
            font-weight: 600;
            margin-bottom: 4px;
            font-size: 0.85rem;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .contact-item p {
            margin: 0;
            color: #e2e8f0;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .contact-item a {
            color: #e2e8f0;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-item a:hover {
            color: #ef4444;
        }

        .contact-form-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px;
            border: 1px solid #e2e8f0;
            height: 100%;
        }

        .contact-form-card h4 {
            font-weight: 700;
            color: #0a1628;
            margin-bottom: 24px;
        }

        .contact-form-card .form-control {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 0.9rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .contact-form-card .form-control:focus {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239,68,68,0.1);
        }

        .contact-form-card .form-label {
            font-weight: 600;
            color: #334155;
            font-size: 0.85rem;
        }

        .btn-submit {
            background: #ef4444;
            color: #ffffff;
            border: none;
            padding: 14px 36px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            width: 100%;
            transition: all 0.3s;
        }

        .btn-submit:hover {
            background: #dc2626;
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(239,68,68,0.3);
        }

        /* ===== MAP ===== */
        .map-section {
            background: #f8fafc;
            padding: 0;
        }

        .map-section iframe {
            width: 100%;
            height: 350px;
            border: 0;
            filter: grayscale(50%);
        }

        /* ===== ARTICLE PAGE ===== */
        .article-section {
            padding: 80px 0;
        }

        .article-card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            transition: all 0.4s;
            height: 100%;
        }

        .article-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            border-color: transparent;
        }

        .article-img {
            height: 200px;
            overflow: hidden;
        }

        .article-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s;
        }

        .article-card:hover .article-img img {
            transform: scale(1.06);
        }

        .article-body {
            padding: 24px;
        }

        .article-meta {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 12px;
        }

        .article-meta span {
            font-size: 0.75rem;
            color: #94a3b8;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .article-meta span i {
            color: #ef4444;
            font-size: 0.7rem;
        }

        .article-body h5 {
            font-weight: 700;
            color: #0a1628;
            font-size: 1.05rem;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .article-body h5 a {
            color: #0a1628;
            text-decoration: none;
            transition: color 0.3s;
        }

        .article-body h5 a:hover {
            color: #ef4444;
        }

        .article-body p {
            color: #64748b;
            font-size: 0.85rem;
            line-height: 1.6;
            margin: 0;
        }

        .article-link {
            color: #ef4444;
            font-weight: 600;
            font-size: 0.85rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 14px;
            transition: gap 0.3s;
        }

        .article-link:hover {
            gap: 10px;
            color: #dc2626;
        }

        /* ===== PRODUCT FILTER ===== */
        .filter-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 30px;
            padding: 20px 24px;
            background: #f8fafc;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        .filter-bar .form-select {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 8px 16px;
            font-size: 0.85rem;
            font-weight: 500;
            width: auto;
        }

        .filter-bar .form-select:focus {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239,68,68,0.1);
        }

        .product-count {
            color: #64748b;
            font-size: 0.85rem;
            font-weight: 500;
        }

        /* ===== FOOTER ===== */
        .site-footer {
            background: #0a1628;
            color: #94a3b8;
            padding-top: 80px;
        }

        .footer-brand {
            font-size: 1.5rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 16px;
        }

        .footer-brand span {
            color: #ef4444;
        }

        .footer-desc {
            font-size: 0.9rem;
            line-height: 1.7;
            margin-bottom: 24px;
            color: #64748b;
        }

        .footer-social {
            display: flex;
            gap: 10px;
        }

        .footer-social a {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.05);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 1rem;
        }

        .footer-social a:hover {
            background: #ef4444;
            color: #ffffff;
            transform: translateY(-3px);
        }

        .footer-title {
            color: #ffffff;
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #64748b;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .footer-links a::before {
            content: '';
            width: 0;
            height: 2px;
            background: #ef4444;
            transition: width 0.3s;
        }

        .footer-links a:hover {
            color: #ffffff;
        }

        .footer-links a:hover::before {
            width: 12px;
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 16px;
        }

        .footer-contact-item i {
            color: #ef4444;
            font-size: 1rem;
            margin-top: 3px;
        }

        .footer-contact-item p {
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .footer-contact-item a {
            color: #64748b;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-contact-item a:hover {
            color: #ffffff;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.06);
            padding: 24px 0;
            margin-top: 60px;
        }

        .footer-bottom p {
            margin: 0;
            font-size: 0.8rem;
            color: #475569;
        }

        /* ===== ANIMATIONS ===== */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-up {
            animation: fadeUp 0.7s ease forwards;
        }

        .delay-1 { animation-delay: 0.1s; opacity: 0; }
        .delay-2 { animation-delay: 0.2s; opacity: 0; }
        .delay-3 { animation-delay: 0.3s; opacity: 0; }
        .delay-4 { animation-delay: 0.4s; opacity: 0; }
        .delay-5 { animation-delay: 0.5s; opacity: 0; }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 991.98px) {
            .hero-section {
                text-align: center;
                padding-top: 60px;
            }

            .hero-desc {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-image-col {
                margin-top: 50px;
            }

            .hero-stat-float {
                left: 50%;
                transform: translateX(-50%);
            }

            .main-navbar .nav-link {
                padding: 12px 16px !important;
            }

            .nav-cta {
                margin: 8px 16px;
                text-align: center;
                display: inline-block !important;
            }
        }

        @media (max-width: 767.98px) {
            .hero-title {
                font-size: 2rem;
            }

            .stats-bar .row > div {
                margin-bottom: 10px;
            }

            .filter-bar {
                flex-direction: column;
                align-items: stretch;
            }
        }

                /* ===== PRODUCT DETAIL ===== */
        .product-detail-section {
            padding: 80px 0;
        }

        .detail-img-main {
            width: 100%;
            height: 450px;
            object-fit: cover;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
        }

        .detail-img-thumbs {
            display: flex;
            gap: 12px;
            margin-top: 16px;
        }

        .detail-thumb {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #e2e8f0;
            cursor: pointer;
            transition: all 0.3s;
        }

        .detail-thumb:hover, .detail-thumb.active {
            border-color: #ef4444;
        }

        .detail-category {
            display: inline-block;
            background: rgba(239,68,68,0.1);
            color: #ef4444;
            padding: 6px 16px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
        }

        .detail-title {
            font-size: 2rem;
            font-weight: 800;
            color: #0a1628;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .detail-desc {
            color: #475569;
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .spec-table {
            width: 100%;
            margin-bottom: 30px;
        }

        .spec-table tr {
            border-bottom: 1px solid #f1f5f9;
        }

        .spec-table td {
            padding: 14px 0;
            font-size: 0.9rem;
        }

        .spec-table td:first-child {
            color: #64748b;
            font-weight: 600;
            width: 35%;
        }

        .spec-table td:last-child {
            color: #0a1628;
            font-weight: 500;
        }

        .btn-request-quote {
            background: #ef4444;
            color: #ffffff;
            border: none;
            padding: 16px 36px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .btn-request-quote:hover {
            background: #dc2626;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(239,68,68,0.3);
        }

        .btn-wa {
            background: #25D366;
            color: #ffffff;
            border: none;
            padding: 16px 36px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.95rem;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .btn-wa:hover {
            background: #1ebe57;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(37,211,102,0.3);
        }

        .info-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px;
            margin-top: 24px;
        }

        .info-box h6 {
            font-weight: 700;
            color: #0a1628;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-box h6 i {
            color: #ef4444;
        }

        .info-box p {
            color: #64748b;
            font-size: 0.85rem;
            margin: 0;
            line-height: 1.6;
        }

        /* Tab description */
        .detail-tabs .nav-link {
            color: #64748b;
            font-weight: 600;
            border: none;
            padding: 12px 24px;
            font-size: 0.9rem;
            border-bottom: 3px solid transparent;
        }

        .detail-tabs .nav-link.active {
            color: #0a1628;
            border-bottom-color: #ef4444;
            background: transparent;
        }

                /* Product card link fix */
        a .product-card {
            color: inherit;
        }

        a .product-body h5 {
            color: #0a1628;
            transition: color 0.3s;
        }

        a:hover .product-body h5 {
            color: #ef4444;
        }

        a .product-body p {
            color: #64748b;
        }

        a .product-category {
            color: #ef4444;
        }
    </style>
</head>
<body>

@include('partials.navbar')

@yield('content')

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
<script>
    // Active nav link
    document.addEventListener('DOMContentLoaded', function() {
        const currentPath = window.location.pathname;
        document.querySelectorAll('.main-navbar .nav-link').forEach(function(link) {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    });

    // Scroll animation (simple IntersectionObserver)
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.service-card, .product-card, .article-card, .vm-card').forEach(function(el) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    });
</script>

</body>
</html>