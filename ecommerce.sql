-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 11:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sliders` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_stock` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alluser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminuserrole` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(25) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `brand`, `category`, `product`, `sliders`, `coupon`, `shipping`, `blog`, `settings`, `orders`, `product_stock`, `return_order`, `report`, `alluser`, `adminuserrole`, `review`, `type`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '8885858669', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, '2022-08-01 01:59:38', '$2y$10$Rz5XIUJlFO9/VFVdZbNuhu8UsBJeiM/RGyEHLn9L0qI//lULuE6VG', 'MlHtL0ltA6FkcNVMemYQ7LjCFQaVO2peFbGXYTI86FHD5skUNlY60K8vYv5C', NULL, 'images/admin/20220841620reduced_Mounesh_10382.jpg', '2022-08-01 01:59:38', '2022-08-04 12:12:30'),
(2, 'test', 'test@gmail.com', '4586932156', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2022-08-01 01:59:38', '$2y$10$YCu05gZ3zKbKz4qUuKnLHeVUsGBHUjba7afGpjHdt45iRJO30VT/W', 'NMVaD4M8LPolilZuauLojiMXhKE10wel3hcWPoUktqF8LOvuvpsSs32ajsq8', NULL, 'images/admin/20220841626image_processing20210929-2994-1eghc4e.png', '2022-08-01 01:59:38', '2022-08-04 12:03:33'),
(5, 'Demo', 'demo@gmail.com', NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '$2y$10$5K99pXpspavOsnd170gnK.h.GQfkarPS0pQjjhBfRUccImzN62Ewi', NULL, NULL, 'images/admin/1744401047569369.png', '2022-09-19 08:02:49', '2022-09-19 08:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_hin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `category_id`, `post_title_en`, `post_title_hin`, `post_slug_en`, `post_slug_hin`, `post_image`, `post_details_en`, `post_details_hin`, `created_at`, `updated_at`) VALUES
(1, 4, 'A Content Engine that Drives Revenue — Whiteboard Friday', 'एक सामग्री इंजन जो राजस्व चलाता है - व्हाइटबोर्ड शुक्रवार', '', '', 'images/blog/OIP.jpg', 'pin-todayrsquos-whiteboard-fridaynbspa-hrefhttpsmozcomvideos-target-blankmozcon-speakernbspaand-content-marketing-expert-ross-simmonds-walks-you-through-his-method-for-creating-a-content-marketing-engine-that-will-ultimately-make-you-money-rooted-in-four-simple-steps-research-creation-distribution-and-optimizationp-piframe-frameborder0-height437-namewistia-embed-scrollingno-srchttpsfastwistianetembediframe0i90kpg3r4videofoamtrue-titlea-content-engine-that-drives-revenue-whiteboard-friday-video-width777iframep-pa-hrefhttpsmozcomimagesblogwbf-3-whiteboard-151-152-1pngw2903ampautocompress2cformatampfitcropampdm1662687717amps578f1d6caf85bc719441399969f144a4-target-blankimg-altwhiteboard-outlining-the-process-for-creating-a-content-engine-that-drives-revenue-srchttpsmozcomimagesblogwbf-3-whiteboard-151-152-1pngw2903ampautocompress2cformatampfitcropampdm1662687717amps578f1d6caf85bc719441399969f144a4-ap-pclick-on-the-whiteboard-image-above-to-open-a-high-resolution-version-in-a-new-tabp-h2video-transcriptionh2-phey-moz-friends-i39m-ross-simmonds-and-today-we39re-going-to-be-talking-about-something-that-i-hold-really-deep-to-my-heart-mdash-the-idea-of-using-content-to-generate-revenue-generate-business-results-we39re-going-to-be-talking-about-how-to-create-anbspa-hrefhttpsmozcombeginners-guide-to-content-marketing-target-blankcontent-marketinganbspengine-that-ultimately-will-make-your-money-jiggle-jiggle-or-fold-i-don39t-know-but-either-way-what-we39re-going-to-be-talking-about-today-is-something-that-i-really-hope-you-can-apply-to-your-content-marketing-teams-that-you-can-apply-to-your-entire-engine-and-ultimately-shape-the-way-that-your-content-culture-operates-and-it39s-rooted-in-four-simple-steps-mdash-research-create-distribute-and-optimize-and-if-you-can-embrace-a-culture-that-leverages-those-four-things-consistently-year-after-year-quarter-after-quarter-month-after-month-i-am-convinced-that-you-will-be-able-to-see-revenue-results-and-the-goals-that-you-have-set-out-to-accomplish-directly-from-your-content-engine-let39s-dive-into-each-of-themp-h2researchh2-pso-the-first-one-is-research-this-is-essentially-tactics-people-and-timeline-and-goals-that-are-going-to-be-applicable-to-each-of-these-different-categoriesp-h3tacticsh3-h4community-researchh4-pwhen-it-comes-to-research-the-tactics-that-you-want-to-embrace-upfront-and-initially-are-rooted-in-things-like-community-research-what-does-that-mean-it-means-you39re-going-to-go-and-find-the-communities-that-your-audience-is-spending-time-on-online-you39re-going-to-go-into-these-communities-and-you39re-going-to-start-to-understand-the-trends-and-the-types-of-content-that-they39re-consuming-the-problems-that-they39re-talking-about-on-a-regular-basis-you39re-looking-for-qualitative-insight-to-understand-the-problems-of-the-audience-that-you39re-trying-to-reachp-h4keyword-researchh4-pthen-you39re-going-to-do-things-likenbspa-hrefhttpsmozcomkeyword-research-guide-target-blankkeyword-researcha-you39re-going-to-understand-the-search-intent-behind-the-words-that-your-audience-are-going-into-google-and-typing-in-to-find-problems-to-find-information-to-solve-problems-that-they39re-having-on-a-day-to-day-basis-keyword-research-is-a-great-solution-and-a-great-way-to-better-understand-the-thinking-and-the-things-that-people-that-you-want-to-connect-with-are-looking-for-if-you-can-understand-this-if-you-can-create-content-that-services-them-as-it-relates-to-their-informational-intent-or-understand-the-way-that-they-buy-and-whether-or-not-they39re-looking-for-coupons-or-whether-they39re-looking-for-things-near-me-and-you-can-create-content-based-off-of-this-research-it-will-make-it-easier-for-you-to-be-able-to-generate-revenue-off-the-back-of-your-contentp-h4backlink-researchh4-pyou-also-want-to-do-things-like-backlink-research-which-is-going-to-inform-backlink-outreach-you-want-to-do-backlink-research-because-it39s-going-to-give-you-insights-into-knowing-what-content-you-can-create-that-is-linkable-what-is-content-that-is-being-produced-the-ideal-publications-that-your-audience-is-reading-are-linking-back-to-you-want-to-use-all-of-this-to-inform-your-own-strategyp-h4social-sharing-and-paid-media-researchh4-psocial-sharing-research-paid-media-research-look-at-the-content-that-people-in-your-audience-are-sharing-on-social-look-at-your-competitors-and-what-information-and-resources-they39re-promoting-because-it39s-very-likely-that-if-they39re-running-ads-to-a-certain-landing-page-that-it39s-probably-generating-some-revenue-so-you-want-to-look-at-that-and-use-it-to-inform-your-own-strategy-as-wellp-h3peopleh3-pwhat-type-of-people-on-your-team-do-you-want-to-have-making-these-types-of-decisions-and-doing-this-research-it39s-pretty-holistic-you-want-seos-you-want-social-media-managers-you-want-your-community-manager-involved-you-want-your-ppc-folks-involved-you-want-a-strategist-an-analyst-maybe-even-some-developers-involved-this-is-an-important-piece-of-the-puzzle-that-oftentimes-gets-overlooked-when-we-think-about-our-industry-content-marketing-there39s-two-words-there-mdash-content-and-marketing-we-forget-about-marketing-actually-being-rooted-in-research-so-you-want-to-embrace-the-research-side-of-things-before-you-start-creating-content-and-you-want-to-have-a-holistic-team-doing-thisp', '<p>आज-के-व्हाइटबोर्ड-फ्राइडे-में,-MozCon-के-स्पीकर-और-कंटेंट-मार्केटिंग-विशेषज्ञ-रॉस-सिममंड्स-ने-आपको-एक-कंटेंट-मार्केटिंग-इंजन-बनाने-के-लिए-अपने-तरीके-के-माध्यम-से-चलता-है-जो-अंततः-आपको-चार-सरल-चरणों-में-निहित-पैसा-कमाएगा:-अनुसंधान,-निर्माण,-वितरण-और-अनुकूलन।</p>\r\n\r\n<p><br-/>\r\nव्हाइटबोर्ड-एक-सामग्री-इंजन-बनाने-की-प्रक्रिया-को-रेखांकित-करता-है-जो-राजस्व-बढ़ाता-है<br-/>\r\nएक-नए-टैब-में-उच्च-रिज़ॉल्यूशन-संस्करण-खोलने-के-लिए-ऊपर-दिए-गए-व्हाइटबोर्ड-चित्र-पर-क्लिक-करें!</p>\r\n\r\n<p>वीडियो-ट्रांसक्रिप्शन<br-/>\r\nअरे,-मोजेज-दोस्तों।-मैं-रॉस-सिममंड्स-हूं,-और-आज-हम-एक-ऐसी-चीज-के-बारे-में-बात-करने-जा-रहे-हैं-जो-मेरे-दिल-में-बहुत-गहरी-है---राजस्व-उत्पन्न-करने,-व्यावसायिक-परिणाम-उत्पन्न-करने-के-लिए-सामग्री-का-उपयोग-करने-का-विचार।-हम-इस-बारे-में-बात-करने-जा-रहे-हैं-कि-एक-कंटेंट-मार्केटिंग-इंजन-कैसे-बनाया-जाए-जो-अंततः-आपके-पैसे-को-झकझोर-कर-रख-देगा,-मुझे-नहीं-पता।-लेकिन-किसी-भी-तरह-से,-आज-हम-जिस-चीज-के-बारे-में-बात-करने-जा-रहे-हैं,-वह-ऐसी-चीज-है-जिसकी-मुझे-वास्तव-में-उम्मीद-है-कि-आप-अपनी-सामग्री-विपणन-टीमों-पर-लागू-कर-सकते-हैं,-कि-आप-अपने-पूरे-इंजन-पर-लागू-कर-सकते-हैं-और-अंततः-अपनी-सामग्री-संस्कृति-के-संचालन-के-तरीके-को-आकार-दे-सकते-हैं।-और-यह-चार-सरल-चरणों-में-निहित-है---अनुसंधान,-निर्माण,-वितरण-और-अनुकूलन।-और-अगर-आप-एक-ऐसी-संस्कृति-को-अपना-सकते-हैं-जो-लगातार-उन-चार-चीजों-का-लाभ-उठाती-है,-साल-दर-साल,-तिमाही-दर-तिमाही,-महीने-दर-महीने,-मुझे-विश्वास-है-कि-आप-राजस्व-परिणाम-और-उन-लक्ष्यों-को-देखने-में-सक्षम-होंगे-जिन्हें-आपने-सीधे-पूरा-करने-के-लिए-निर्धारित-किया-है।-आपका-सामग्री-इंजन।-आइए-उनमें-से-प्रत्येक-में-गोता-लगाएँ।</p>\r\n\r\n<p>शोध-करना<br-/>\r\nतो-पहला-शोध-है।-यह-अनिवार्य-रूप-से-रणनीति,-लोग-और-समयरेखा,-और-लक्ष्य-हैं-जो-इन-विभिन्न-श्रेणियों-में-से-प्रत्येक-पर-लागू-होने-जा-रहे-हैं।</p>\r\n\r\n<p>युक्ति<br-/>\r\nसामुदायिक-अनुसंधान<br-/>\r\nजब-शोध-की-बात-आती-है,-तो-आप-जिन-युक्तियों-को-आगे-बढ़ाना-चाहते-हैं-और-शुरू-में-सामुदायिक-अनुसंधान-जैसी-चीजों-में-निहित-हैं।-इसका-क्या-मतलब-है?-इसका-मतलब-है-कि-आप-उन-समुदायों-को-खोजने-जा-रहे-हैं,-जिन-पर-आपके-दर्शक-ऑनलाइन-समय-बिता-रहे-हैं।-आप-इन-समुदायों-में-जाने-वाले-हैं-और-आप-उन-रुझानों-और-सामग्री-के-प्रकारों-को-समझना-शुरू-करने-जा-रहे-हैं-जिनका-वे-उपभोग-कर-रहे-हैं,-जिन-समस्याओं-के-बारे-में-वे-नियमित-रूप-से-बात-कर-रहे-हैं।-आप-उन-दर्शकों-की-समस्याओं-को-समझने-के-लिए-गुणात्मक-अंतर्दृष्टि-की-तलाश-कर-रहे-हैं,-जिन-तक-आप-पहुंचने-का-प्रयास-कर-रहे-हैं।</p>\r\n\r\n<p>खोजशब्द-अनुसंधान<br-/>\r\nफिर-आप-कीवर्ड-रिसर्च-जैसे-काम-करने-जा-रहे-हैं।-आप-उन-शब्दों-के-पीछे-की-खोज-के-इरादे-को-समझने-जा-रहे-हैं-जो-आपके-दर्शक-Google-में-जा-रहे-हैं-और-समस्याओं-को-खोजने,-जानकारी-खोजने,-उन-समस्याओं-को-हल-करने-के-लिए-टाइप-कर-रहे-हैं-जो-वे-दिन-प्रतिदिन-के-आधार-पर-कर-रहे-हैं।-खोजशब्द-अनुसंधान-एक-अच्छा-समाधान-है-और-सोच-को-बेहतर-ढंग-से-समझने-का-एक-शानदार-तरीका-है-और-जिन-चीज़ों-से-आप-जुड़ना-चाहते-हैं-वे-लोग-खोज-रहे-हैं।-यदि-आप-इसे-समझ-सकते-हैं,-यदि-आप-ऐसी-सामग्री-बना-सकते-हैं-जो-उनकी-सेवा-करती-है-क्योंकि-यह-उनके-सूचनात्मक-इरादे-से-संबंधित-है-या-जिस-तरह-से-वे-खरीदते-हैं-और-वे-कूपन-की-तलाश-में-हैं-या-नहीं-या-वे-मेरे-आस-पास-की-चीजों-की-तलाश-में-हैं-या-नहीं,-और-आप-इस-शोध-के-आधार-पर-सामग्री-बना-सकते-हैं,-इससे-आपके-लिए-अपनी-सामग्री-के-पीछे-से-राजस्व-उत्पन्न-करने-में-सक्षम-होना-आसान-हो-जाएगा।</p>\r\n\r\n<p>बैकलिंक-अनुसंधान<br-/>\r\nआप-बैकलिंक-रिसर्च-जैसे-काम-भी-करना-चाहते-हैं,-जो-बैकलिंक-आउटरीच-को-सूचित-करने-वाला-है।-आप-बैकलिंक-अनुसंधान-करना-चाहते-हैं-क्योंकि-यह-आपको-यह-जानने-में-अंतर्दृष्टि-देने-वाला-है-कि-आप-कौन-सी-सामग्री-बना-सकते-हैं-जो-लिंक-करने-योग्य-है।-ऐसी-कौन-सी-सामग्री-है-जिसका-निर्माण-किया-जा-रहा-है,-आपके-दर्शक-जो-आदर्श-प्रकाशन-पढ़-रहे-हैं,-वे-वापस-किससे-जुड़-रहे-हैं?-आप-इन-सभी-का-उपयोग-अपनी-रणनीति-को-सूचित-करने-के-लिए-करना-चाहते-हैं।</p>\r\n\r\n<p>सोशल-शेयरिंग-और-पेड-मीडिया-रिसर्च<br-/>\r\nसोशल-शेयरिंग-रिसर्च,-पेड-मीडिया-रिसर्च।-उस-सामग्री-को-देखें-जिसे-आपके-दर्शकों-में-लोग-सामाजिक-रूप-से-साझा-कर-रहे-हैं।-अपने-प्रतिस्पर्धियों-को-देखें-और-वे-किस-जानकारी-और-संसाधनों-का-प्रचार-कर-रहे-हैं,-क्योंकि-इस-बात-की-बहुत-अधिक-संभावना-है-कि-यदि-वे-किसी-निश्चित-लैंडिंग-पृष्ठ-पर-विज्ञापन-चला-रहे-हैं,-तो-शायद-इससे-कुछ-आय-हो-रही-है।-तो-आप-इसे-देखना-चाहते-हैं-और-इसका-उपयोग-अपनी-रणनीति-को-सूचित-करने-के-लिए-भी-करना-चाहते-हैं।</p>\r\n\r\n<p>लोग<br-/>\r\nआप-अपनी-टीम-के-किस-प्रकार-के-लोगों-से-इस-प्रकार-के-निर्णय-लेना-चाहते-हैं-और-यह-शोध-करना-चाहते-हैं?-यह-काफी-समग्र-है।-आप-एसईओ-चाहते-हैं।-आप-सोशल-मीडिया-मैनेजर-चाहते-हैं।-आप-चाहते-हैं-कि-आपका-समुदाय-प्रबंधक-शामिल-हो।-आप-चाहते-हैं-कि-आपके-पीपीसी-लोग-शामिल-हों।-आप-एक-रणनीतिकार,-एक-विश्लेषक-चाहते-हैं,-शायद-कुछ-डेवलपर्स-भी-इसमें-शामिल-हों।-यह-पहेली-का-एक-महत्वपूर्ण-टुकड़ा-है-जिसे-अक्सर-अनदेखा-कर-दिया-जाता-है।-जब-हम-अपने-उद्योग,-सामग्री-विपणन-के-बारे-में-सोचते-हैं,-तो-वहां-दो-शब्द-होते-हैं---सामग्री-और-विपणन।-हम-वास्तव-में-अनुसंधान-में-निहित-विपणन-के-बारे-में-भूल-जाते-हैं।-इसलिए-आप-सामग्री-बनाना-शुरू-करने-से-पहले-चीजों-के-अनुसंधान-पक्ष-को-अपनाना-चाहते-हैं,-और-आप-चाहते-हैं-कि-ऐसा-करने-वाली-एक-समग्र-टीम-हो।</p>', '2022-09-16 03:43:40', '2022-09-16 03:43:40'),
(2, 4, 'How to Build Location Pages Humans (and Search Engines) Will Love', 'लोकेशन पेज कैसे बनाएं इंसान (और सर्च इंजन) पसंद करेंगे', '', '', '/images/blog/1744117336013167.jpg', 'p-dirltrlocation-pages-are-an-important-part-of-multi-location-seo-for-enterprises-and-smbs-alike-but-they-arenrsquot-easy-to-get-right-at-best-they-should-give-potential-customers-zero-excuse-to-choose-a-competing-business-often-though-they-struggle-to-provide-unique-value-and-offer-essentially-the-same-information-as-the-home-or-service-pages-mdash-but-with-a-different-city-in-the-h1-and-meta-titlep-p-dirltrthis-happens-because-unique-content-is-hard-to-come-by-when-every-location-does-or-sells-the-same-thingp-p-dirltrthe-question-isnrsquot-ldquohow-should-i-go-about-creating-an-awesome-location-pagerdquo-but-rather-ldquoam-i-giving-customers-enough-unique-value-to-even-justify-this-page-in-the-first-placerdquop-p-dirltrif-the-answer-is-ldquonordquo-itrsquos-time-to-find-new-opportunities-for-valuable-content-read-on-for-ways-to-determine-whether-yoursquore-offering-unique-value-for-your-location-pages-and-how-to-make-them-betterp-h2-dirltris-your-content-actually-uniqueh2-p-dirltrwhen-it-comes-to-building-awesome-location-pages-that-will-impress-your-customers-and-search-engines-content-is-your-most-powerful-tool-and-irsquom-not-just-talking-about-words-on-a-page-paragraph-form-content-content-is-any-information-on-your-page-in-any-mediump-p-dirltrregardless-of-the-way-you-communicate-to-customers-text-based-content-video-images-etc-location-page-content-will-fall-into-one-of-three-bucketsp-h3-dirltr1-boilerplateh3-ol-ol-p-dirltrboilerplate-content-can-be-copied-and-pasted-across-all-locations-and-remain-accurate-a-brandrsquos-mission-statement-falls-into-this-category-for-example-the-good-thing-about-boilerplate-content-is-it-doesnrsquot-require-much-work-to-implement-it-also-doesnrsquot-provide-the-unique-value-wersquore-looking-forp-p-dirltras-a-rule-of-thumb-use-boilerplate-content-when-itrsquos-necessary-and-it-will-be-but-avoid-creating-pages-where-thenbspemmajoritynbspemof-content-falls-into-this-categoryp-h3-dirltr2-technically-ldquouniquerdquoh3-ol-ol-p-dirltrletrsquos-say-you-want-to-avoid-duplicate-content-across-location-pages-so-you-rewrite-the-same-information-business-description-services-etc-over-and-over-againnbspemvoilanbspemitrsquos-unique-rightp-p-dirltrnot-exactlyp-p-dirltremtechnicallyem-itrsquos-unique-mdash-but-itrsquos-not-saying-anything-new-aboutnbspemthatemnbsplocation-hence-the-quotation-marks-in-other-words-the-content-isnrsquot-duplicative-but-itrsquos-also-not-that-valuable-yoursquore-simply-using-different-words-to-relay-the-same-messagep-p-dirltrthis-type-of-content-is-in-my-opinion-the-worst-of-the-three-because-it-takes-manual-effort-to-create-but-isn39t-more-helpful-to-customers-than-copy-and-pasting-the-source-materialp-h3-dirltr3-unique-valueh3-ol-ol-p-dirltrthe-third-final-and-best-type-of-content-is-ldquounique-valuerdquo-this-contentnbspemonlyemnbspapplies-to-the-location-the-page-is-about-it-canrsquot-be-copied-and-pasted-anywhere-else-because-the-value-of-the-content-is-tied-to-the-value-of-the-location-itselfp-p-dirltrwhile-this-type-of-content-takes-a-lot-of-work-to-create-itrsquos-also-the-most-helpful-and-should-account-for-the-majority-of-the-content-on-location-pagesp-h2-dirltrwhat-should-a-location-page-includeh2-p-dirltrcreating-enough-unique-value-on-location-pages-to-outweigh-boilerplate-content-isnrsquot-easy-but-itrsquos-not-impossible-either-the-following-list-includes-content-features-that-can-add-new-layers-of-unique-value-to-your-pages-mdash-or-close-to-itp-h3-dirltr1-paragraph-form-contenth3-ol-ol-p-dirltrparagraph-form-content-is-a-great-way-to-provide-information-to-users-about-your-location-when-writing-location-pages-focus-on-information-that-is-specific-to-the-storefront-the-page-is-about-herersquos-an-examplep-ul-li-dirltr-p-dirltrdiluted-value-ldquoall-of-our-locations-have-great-customer-service-and-wersquore-super-passionate-about-offering-product-service-to-people-like-yourdquop-li-li-dirltr-p-dirltrunique-value-ldquowersquore-located-at-the-corner-of-street-and-avenue-and-a-five-minute-walk-from-landingmarkrdquop-li-ul-p-dirltrthere-is-a-time-and-a-place-for-ldquodiluted-valuerdquo-content-but-your-goal-should-be-to-provide-as-much-unique-information-as-possiblep-h3-dirltr2-location-attributes-and-featuresh3-ol-ol-p-dirltrif-yoursquove-optimized-anbspa-hrefhttpsmozcomblogwhat-is-google-my-business-target-blankgoogle-business-profileanbspformerly-google-my-business-or-gmb-yoursquore-familiar-with-location-attributes-in-short-these-are-a-list-of-features-that-help-customers-plan-their-visit-to-your-locationp-p-dirltrif-yoursquore-not-sure-what-to-include-in-your-attribute-list-check-your-gbp-and-carry-over-any-boxes-you-checked-there-that-said-donrsquot-limit-yourself-to-those-items-mdash-feel-free-to-add-as-many-attributes-as-are-helpful-to-your-customersp-pimg-altillustration-of-a-mobile-phone-showing-a-location-page-example-with-attributes-and-staff-bios-srchttpsmozcomimagesblogattributes-staff-biopngw780amph780ampautocompress2cformatampfitclipampdm1662749360ampsd68ed601bbc1fcd48cd80592c0b02134-p-h3-dirltr3-staff-profilesh3-p-dirltrone-of-the-things-that-is-almost-always-unique-to-each-business-location-is-the-people-who-work-there-highlighting-notable-staff-membersrsquo-profiles-is-a-great-way-to-show-humans-and-search-engines-what-and-who-to-expect-when-they-arrivep-h3-dirltr4-hours-amp-naph3-p-dirltrhours-of-operation-and-nap-info-name-address-and-phone-number-are-the-most-basic-form-of-unique-content-but-donrsquot-forget-to-add-them-to-your-location-pages-additionally-make-this-information-easy-for-customers-to-find-on-the-page-so-they-can-get-in-touch-or-get-directionsp', '<p>उद्यमों-और-एसएमबी-के-लिए-स्थान-पृष्ठ-बहु-स्थान-एसईओ-का-एक-महत्वपूर्ण-हिस्सा-हैं,-लेकिन-उन्हें-सही-करना-आसान-नहीं-है।-सबसे-अच्छा,-उन्हें-संभावित-ग्राहकों-को-एक-प्रतिस्पर्धी-व्यवसाय-चुनने-के-लिए-शून्य-बहाना-देना-चाहिए।-अक्सर,-हालांकि,-वे-अद्वितीय-मूल्य-प्रदान-करने-के-लिए-संघर्ष-करते-हैं-और-अनिवार्य-रूप-से-होम-या-सेवा-पृष्ठों-के-समान-ही-जानकारी-प्रदान-करते-हैं---लेकिन-H1-और-मेटा-शीर्षक-में-एक-अलग-शहर-के-साथ।</p>\r\n\r\n<p>ऐसा-इसलिए-होता-है-क्योंकि-जब-हर-स्थान-एक-ही-चीज़-करता-या-बेचता-है-तो-अद्वितीय-सामग्री-का-आना-मुश्किल-होता-है।</p>\r\n\r\n<p>सवाल-यह-नहीं-है,-&quot;मुझे-एक-शानदार-स्थान-पृष्ठ-बनाने-के-बारे-में-कैसे-जाना-चाहिए?&quot;,-बल्कि,-&quot;क्या-मैं-ग्राहकों-को-इस-पृष्ठ-को-पहली-जगह-में-उचित-ठहराने-के-लिए-पर्याप्त-अद्वितीय-मूल्य-दे-रहा-हूं?&quot;</p>\r\n\r\n<p>यदि-उत्तर-&quot;नहीं&quot;-है,-तो-मूल्यवान-सामग्री-के-लिए-नए-अवसर-खोजने-का-समय-आ-गया-है।-यह-निर्धारित-करने-के-तरीकों-के-लिए-पढ़ें-कि-क्या-आप-अपने-स्थान-पृष्ठों-के-लिए-अद्वितीय-मूल्य-प्रदान-कर-रहे-हैं,-और-उन्हें-कैसे-बेहतर-बनाया-जाए।</p>\r\n\r\n<p>क्या-आपकी-सामग्री-वास्तव-में-अद्वितीय-है?<br-/>\r\nजब-आपके-ग्राहकों-और-खोज-इंजनों-को-प्रभावित-करने-वाले-शानदार-स्थान-पृष्ठ-बनाने-की-बात-आती-है,-तो-सामग्री-आपका-सबसे-शक्तिशाली-उपकरण-है।-और-मैं-केवल-शब्दों-पर-पृष्ठ,-अनुच्छेद-रूप-सामग्री-के-बारे-में-बात-नहीं-कर-रहा-हूं।-सामग्री-आपके-पृष्ठ-पर-किसी-भी-माध्यम-में-कोई-भी-जानकारी-है।</p>\r\n\r\n<p>आप-ग्राहकों-से-जिस-तरह-से-भी-संवाद-करते-हैं-(पाठ-आधारित-सामग्री,-वीडियो,-चित्र,-आदि),-स्थान-पृष्ठ-सामग्री-तीन-बकेट-में-से-एक-में-आ-जाएगी:</p>\r\n\r\n<p>1.-बॉयलरप्लेट<br-/>\r\nबॉयलरप्लेट-सामग्री-को-सभी-स्थानों-पर-कॉपी-और-पेस्ट-किया-जा-सकता-है-और-सटीक-रह-सकता-है।-उदाहरण-के-लिए,-एक-ब्रांड-का-मिशन-स्टेटमेंट-इस-श्रेणी-में-आता-है।-बॉयलरप्लेट-सामग्री-के-बारे-में-अच्छी-बात-यह-है-कि-इसे-लागू-करने-के-लिए-अधिक-काम-की-आवश्यकता-नहीं-होती-है।-यह-उस-अद्वितीय-मूल्य-को-भी-प्रदान-नहीं-करता-है-जिसकी-हम-तलाश-कर-रहे-हैं।</p>\r\n\r\n<p>एक-नियम-के-रूप-में,-जब-आवश्यक-हो-(और-यह-होगा)-बॉयलरप्लेट-सामग्री-का-उपयोग-करें,-लेकिन-ऐसे-पृष्ठ-बनाने-से-बचें,-जहां-अधिकांश-सामग्री-इस-श्रेणी-में-आती-है।</p>\r\n\r\n<p>2.-तकनीकी-रूप-से-&quot;अद्वितीय&quot;<br-/>\r\nमान-लें-कि-आप-स्थान-पृष्ठों-पर-डुप्लिकेट-सामग्री-से-बचना-चाहते-हैं-ताकि-आप-एक-ही-जानकारी-(व्यावसायिक-विवरण,-सेवाएं,-आदि)-को-बार-बार-फिर-से-लिख-सकें।-वोइला!-यह-अद्वितीय-है,-है-ना?</p>\r\n\r\n<p>बिल्कुल-नहीं।</p>\r\n\r\n<p>तकनीकी-रूप-से,-यह-अद्वितीय-है---लेकिन-यह-उस-स्थान-के-बारे-में-कुछ-भी-नया-नहीं-कह-रहा-है।-(इसलिए-उद्धरण-चिह्न।)-दूसरे-शब्दों-में,-सामग्री-दोहरावदार-नहीं-है,-लेकिन-यह-उतना-मूल्यवान-भी-नहीं-है।-आप-एक-ही-संदेश-को-प्रसारित-करने-के-लिए-बस-अलग-अलग-शब्दों-का-उपयोग-कर-रहे-हैं।</p>\r\n\r\n<p>इस-प्रकार-की-सामग्री,-मेरी-राय-में,-तीनों-में-से-सबसे-खराब-है-क्योंकि-इसे-बनाने-के-लिए-मैन्युअल-प्रयास-की-आवश्यकता-होती-है,-लेकिन-यह-स्रोत-सामग्री-को-कॉपी-पेस्ट-करने-की-तुलना-में-ग्राहकों-के-लिए-अधिक-उपयोगी-नहीं-है।</p>\r\n\r\n<p>3.-अद्वितीय-मूल्य<br-/>\r\nतीसरी,-अंतिम-और-सर्वोत्तम-प्रकार-की-सामग्री-&quot;अद्वितीय-मूल्य&quot;-है।-यह-सामग्री-केवल-उस-स्थान-पर-लागू-होती-है-जिसके-बारे-में-पृष्ठ-है।-इसे-कहीं-और-कॉपी-और-पेस्ट-नहीं-किया-जा-सकता-क्योंकि-सामग्री-का-मूल्य-स्थान-के-मूल्य-से-ही-जुड़ा-होता-है।</p>\r\n\r\n<p>जबकि-इस-प्रकार-की-सामग्री-को-बनाने-में-बहुत-अधिक-काम-लगता-है,-यह-सबसे-अधिक-सहायक-भी-है-और-स्थान-पृष्ठों-पर-अधिकांश-सामग्री-के-लिए-इसका-हिसाब-होना-चाहिए।</p>\r\n\r\n<p>स्थान-पृष्ठ-में-क्या-शामिल-होना-चाहिए?<br-/>\r\nबॉयलरप्लेट-सामग्री-को-पछाड़ने-के-लिए-स्थान-पृष्ठों-पर-पर्याप्त-अद्वितीय-मूल्य-बनाना-आसान-नहीं-है,-लेकिन-यह-असंभव-भी-नहीं-है।-निम्नलिखित-सूची-में-ऐसी-सामग्री-सुविधाएँ-शामिल-हैं-जो-आपके-पृष्ठों-में---या-उसके-करीब-अद्वितीय-मूल्य-की-नई-परतें-जोड़-सकती-हैं।</p>\r\n\r\n<p>1.-पैराग्राफ-फॉर्म-सामग्री<br-/>\r\nपैराग्राफ़-फ़ॉर्म-सामग्री-उपयोगकर्ताओं-को-आपके-स्थान-के-बारे-में-जानकारी-प्रदान-करने-का-एक-शानदार-तरीका-है।-स्थान-पृष्ठ-लिखते-समय,-उस-स्टोरफ़्रंट-के-लिए-विशिष्ट-जानकारी-पर-ध्यान-केंद्रित-करें,-जिसके-बारे-में-पृष्ठ-है।-यहाँ-एक-उदाहरण-है:</p>\r\n\r\n<p>पतला-मूल्य---&quot;हमारे-सभी-स्थानों-में-उत्कृष्ट-ग्राहक-सेवा-है-और-हम-आप-जैसे-लोगों-को-[उत्पाद-/-सेवा]-की-पेशकश-करने-के-लिए-बहुत-उत्साहित-हैं!&quot;</p>\r\n\r\n<p>अद्वितीय-मूल्य---&quot;हम-[स्ट्रीट]-और-[एवेन्यू]-के-कोने-पर-स्थित-हैं-और-[लैंडिंगमार्क]-से-पांच-मिनट-की-पैदल-दूरी-पर-हैं।&quot;</p>\r\n\r\n<p>&quot;पतला-मूल्य&quot;-सामग्री-के-लिए-एक-समय-और-एक-स्थान-है,-लेकिन-आपका-लक्ष्य-अधिक-से-अधिक-अनूठी-जानकारी-प्रदान-करना-होना-चाहिए।</p>\r\n\r\n<p>2.-स्थान-विशेषताएँ-और-सुविधाएँ<br-/>\r\nयदि-आपने-Google-व्यवसाय-प्रोफ़ाइल-(पूर्व-में-Google-मेरा-व्यवसाय-या-GMB)-को-अनुकूलित-किया-है,-तो-आप-स्थान-विशेषताओं-से-परिचित-हैं।-संक्षेप-में,-ये-उन-विशेषताओं-की-सूची-है-जो-ग्राहकों-को-आपके-स्थान-पर-आने-की-योजना-बनाने-में-मदद-करती-हैं।</p>\r\n\r\n<p>यदि-आप-सुनिश्चित-नहीं-हैं-कि-आपकी-विशेषता-सूची-में-क्या-शामिल-किया-जाए,-तो-अपना-GBP-जांचें-और-वहां-आपके-द्वारा-चेक-किए-गए-किसी-भी-बॉक्स-को-ले-जाएं।-उस-ने-कहा,-अपने-आप-को-उन-वस्तुओं-तक-सीमित-न-रखें---अपने-ग्राहकों-के-लिए-उपयोगी-कई-विशेषताओं-को-जोड़ने-के-लिए-स्वतंत्र-महसूस-करें।</p>\r\n\r\n<p>विशेषताओं-और-स्टाफ-बायोस-के-साथ-स्थान-पृष्ठ-का-उदाहरण-दिखाने-वाले-मोबाइल-फ़ोन-का-चित्रण।<br-/>\r\n3.-स्टाफ-प्रोफाइल<br-/>\r\nएक-चीज़-जो-(लगभग)-प्रत्येक-व्यावसायिक-स्थान-के-लिए-हमेशा-अद्वितीय-होती-है,-वह-है-वहां-काम-करने-वाले-लोग।-उल्लेखनीय-स्टाफ-सदस्यों-के-प्रोफाइल-को-हाइलाइट-करना-मनुष्यों-और-खोज-इंजनों-को-यह-दिखाने-का-एक-शानदार-तरीका-है-कि-उनके-आने-पर-क्या-(और-कौन)-उम्मीद-की-जाए।</p>\r\n\r\n<p>4.-घंटे-और-NAP<br-/>\r\nसंचालन-के-घंटे-और-NAP-जानकारी-(नाम,-पता-और-फ़ोन-नंबर)-अद्वितीय-सामग्री-का-सबसे-बुनियादी-रूप-है,-लेकिन-उन्हें-अपने-स्थान-पृष्ठों-में-जोड़ना-न-भूलें।-इसके-अतिरिक्त,-ग्राहकों-के-लिए-इस-जानकारी-को-पृष्ठ-पर-ढूंढना-आसान-बनाएं-ताकि-वे-संपर्क-में-रह-सकें-या-दिशा-निर्देश-प्राप्त-कर-सकें</p>', '2022-09-16 03:48:28', '2022-09-16 03:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_categories`
--

CREATE TABLE `blog_post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_name_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_post_categories`
--

INSERT INTO `blog_post_categories` (`id`, `blog_category_name_en`, `blog_category_name_hin`, `blog_category_slug_en`, `blog_category_slug_hin`, `created_at`, `updated_at`) VALUES
(1, 'tech22', 'तकनीक22', 'tech22', 'तकनीक22', '2022-09-15 07:31:58', '2022-09-15 07:44:54'),
(2, 'Health and care', 'सेहत और देखभाल', 'health-and-care', 'sahata-oura-thakhabhal', '2022-09-15 07:33:44', NULL),
(3, 'Technology', 'टेक्‍नोलॉजी', 'technology', 'टेक्‍नोलॉजी', '2022-09-15 07:35:45', NULL),
(4, 'Market1', 'बाज़ार1', 'market1', 'बाज़ार1', '2022-09-15 07:46:36', '2022-09-15 07:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name_en`, `brand_name_hin`, `brand_slug_en`, `brand_slug_hin`, `brand_image`, `created_at`, `updated_at`) VALUES
(23, 'Samsung', 'सैमसंग', 'samsung', 'सैमसंग', 'images/brands/Samsung_logo.png', NULL, NULL),
(24, 'Apple', 'एप्पल', 'apple', 'एप्पल', 'images/brands/Apple-Logo-PNG-Image-715x715.png', NULL, NULL),
(25, 'Vivo', 'विवो', 'vivo', 'विवो', 'images/brands/vivo-Phone-logo.png', NULL, NULL),
(26, 'Canon', 'विवो', 'canon', 'विवो', 'images/brands/Screenshot (38).png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name_en`, `category_name_hin`, `category_slug_en`, `category_slug_hin`, `category_icon`, `created_at`, `updated_at`) VALUES
(10, 'Fashion', 'फैशन', 'fashion', 'फैशन', 'icon fa fa-shopping-bag', '2022-08-10 00:54:20', '2022-08-20 02:01:52'),
(11, 'Electronics', 'इलेक्ट्रानिक्स', 'electronics', 'इलेक्ट्रानिक्स', 'fa fa-desktop', '2022-08-10 00:55:02', '2022-08-10 00:55:02'),
(12, 'Sweet Home', 'प्यारा घर', 'sweet-home', 'प्यारा-घर', 'fa fa-home', '2022-08-10 00:55:22', '2022-08-10 00:55:22'),
(13, 'Appliances', 'उपकरण', 'appliances', 'उपकरण', 'icon fa fa-envira', '2022-08-10 00:56:31', '2022-08-20 02:00:50'),
(14, 'Beauty', 'सुंदरता', 'beauty', 'सुंदरता', 'icon fa fa-heartbeat', '2022-08-10 00:58:21', '2022-08-20 02:01:11'),
(15, 'Kids and Babies', 'बच्चे और बच्चे', 'kids-and-babies', 'बच्चे-और-बच्चे', 'icon fa fa-paw', '2022-08-20 02:03:18', '2022-08-20 02:05:57'),
(16, 'sports and outdoor', 'खेल और आउटडोर', 'sports-and-outdoor', 'खेल-और-आउटडोर', 'fa fa-futbol-o', '2022-08-20 02:03:58', '2022-08-20 02:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(2, 'DRGDR', 20, '2022-09-23', 1, '2022-08-27 04:49:26', '2022-08-27 05:09:18'),
(4, 'DEMO', 20, '2022-10-20', 1, '2022-10-07 22:13:13', '2022-10-07 22:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_07_30_164132_create_sessions_table', 1),
(7, '2022_08_01_072550_create_admins_table', 2),
(8, '2022_08_06_083625_create_brands_table', 3),
(9, '2022_08_08_093112_create_categories_table', 4),
(10, '2022_08_08_131112_create_sub_categories_table', 5),
(11, '2022_08_08_151820_create_sub_sub_categories_table', 6),
(12, '2022_08_09_083202_create_products_table', 7),
(13, '2022_08_09_083630_create_product_images_table', 7),
(14, '2022_08_19_075646_create_sliders_table', 8),
(15, '2022_08_25_145309_create_wish_lists_table', 9),
(16, '2022_08_27_093458_create_coupons_table', 10),
(17, '2022_09_02_051832_create_ship_divisions_table', 11),
(18, '2022_09_02_060917_create_ship_districts_table', 12),
(19, '2022_09_03_130233_create_ship_states_table', 13),
(20, '2022_09_08_083422_create_shippings_table', 14),
(21, '2022_09_12_134310_create_orders_table', 15),
(22, '2022_09_12_134359_create_order_items_table', 15),
(23, '2022_09_15_124609_create_blog_post_categories_table', 16),
(24, '2022_09_16_082857_create_blog_posts_table', 17),
(25, '2022_09_16_150043_create_site_settings_table', 18),
(26, '2022_09_17_032743_create_seos_table', 19),
(27, '2022_09_17_151009_create_reviews_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `return_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `division_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `post_code`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_no`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_order`, `return_reason`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 6, 16, 3, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, NULL, 'Stripe', 'Stripe', 'pi_3LhWUWSBFQXShEkp0dQBhnhL', 'inr', 872.00, '63205d4b45406', 'EOS33116658', '13 September 2022', 'September', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'delivered', '2022-09-13 05:06:59', '2022-09-18 12:09:03'),
(3, 2, 6, 16, 1, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, NULL, 'Stripe', 'Stripe', 'pi_3LhWuGSBFQXShEkp0Tqincjj', 'inr', 347.00, '632063872a83f', 'EOS54540071', '13 September 2022', 'September', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'delivered', '2022-09-13 05:33:35', '2022-09-18 12:10:15'),
(4, 2, 9, 17, 5, 'Mounesh Pattar', 'mouneshp11@gmail.com', '8880508336', 590003, 'gsgsxdg', 'Stripe', 'Stripe', 'pi_3LhWxCSBFQXShEkp1vZLI9iI', 'inr', 1177.00, '6320643dad3f9', 'EOS96711987', '13 September 2022', 'September', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2022-09-13 05:36:38', NULL),
(5, 2, 6, 16, 3, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, 'fawd', 'Stripe', 'Stripe', 'pi_3LhXEdSBFQXShEkp0TdVLqYi', 'inr', 835.00, '632068764e7bb', 'EOS17520013', '13 September 2022', 'September', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'precessing', '2022-09-13 05:54:39', '2022-09-16 22:35:12'),
(6, 2, 6, 16, 4, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, 'edrhgdrghr', 'Stripe', 'Stripe', 'pi_3LhXzUSBFQXShEkp0siDCCqQ', 'inr', 545.00, '632073cf0c6f3', 'EOS38550654', '13 September 2022', 'September', '2022', NULL, NULL, NULL, NULL, NULL, NULL, '17 September 2022', '1', 'Return Order Reasondfdsefzds', 'delivered', '2022-09-13 06:43:03', '2022-09-16 23:31:40'),
(7, 2, 6, 16, 4, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, 'edrhgdrghr', 'Stripe', 'Stripe', 'pi_3LhY00SBFQXShEkp1dE0VRfK', 'inr', 545.00, '632073ef0c66c', 'EOS91004411', '13 September 2022', 'September', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'cancel', '2022-09-13 06:43:35', '2022-09-14 08:29:08'),
(8, 2, 6, 16, 1, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, 'adfawf', 'Cash On Delivery', 'Cash On Delivery', NULL, 'INR', 545.00, NULL, 'EOS54698587', '13 September 2022', 'September', '2022', NULL, NULL, NULL, NULL, NULL, NULL, '17 September 2022', '2', 'wrong product', 'delivered', '2022-09-13 10:51:13', '2022-09-17 00:00:23'),
(9, 2, 6, 16, 3, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, 'fasd', 'Stripe', 'Stripe', 'pi_3LiCP1SBFQXShEkp0K97D33t', 'inr', 400.00, '6322d29d98b88', 'EOS38839151', '15 September 2022', 'September', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'shipped', '2022-09-15 01:52:06', '2022-09-18 12:03:44'),
(10, 2, 6, 16, 3, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, 'estt', 'Cash On Delivery', 'Cash On Delivery', NULL, 'INR', 899.00, NULL, 'EOS56791171', '21 September 2022', 'September', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'confirm', '2022-09-21 11:20:16', '2022-09-21 11:21:52'),
(11, 2, 6, 16, 3, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, 'wedw', 'Stripe', 'Stripe', 'pi_3LlqfOSBFQXShEkp0KrcIx10', 'inr', 400.00, '6330181c309bd', 'EOS19295217', '25 September 2022', 'September', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2022-09-25 03:28:06', NULL),
(12, 2, 6, 16, 4, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, 'dww', 'Stripe', 'Stripe', 'pi_3LlqmZSBFQXShEkp0fDf0zzL', 'inr', 899.00, '633019da4c37e', 'EOS85515611', '25 September 2022', 'September', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2022-09-25 03:35:31', NULL),
(13, 2, 6, 16, 3, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, 'deno', 'Stripe', 'Stripe', 'pi_3LqTzuSBFQXShEkp02tkJikQ', 'inr', 3320.00, '6340f2906d795', 'EOS64618483', '08 October 2022', 'October', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'confirm', '2022-10-07 22:16:26', '2022-10-07 22:17:44'),
(14, 2, 6, 16, 3, 'Mounesh', 'mouneshp11@gmail.com', '07483573859', 590003, 'fthrh ujtyujm', 'Stripe', 'Stripe', 'pi_3LuDZESBFQXShEkp09kkYJ7h', 'inr', 3050.00, '634e87ba86d8b', 'EOS49545746', '18 October 2022', 'October', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'Pending', '2022-10-18 05:32:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 16, 'Red', NULL, '2', 545.00, '2022-09-13 05:06:59', NULL),
(2, 3, 13, 'Red', 'Small', '1', 434.00, '2022-09-13 05:33:35', NULL),
(3, 4, 14, 'Red', NULL, '1', 777.00, '2022-09-13 05:36:38', NULL),
(4, 4, 17, 'Red', 'gdr', '1', 400.00, '2022-09-13 05:36:38', NULL),
(5, 5, 5, 'Red', 'Small', '1', 1044.00, '2022-09-13 05:54:39', NULL),
(6, 6, 16, 'Red', NULL, '1', 545.00, '2022-09-13 06:43:03', NULL),
(7, 7, 16, 'Red', NULL, '1', 545.00, '2022-09-13 06:43:35', NULL),
(8, 8, 16, 'Red', NULL, '1', 545.00, '2022-09-13 10:51:13', NULL),
(9, 9, 17, 'Red', 'gdr', '1', 400.00, '2022-09-15 01:52:06', NULL),
(10, 10, 18, '--Select Color--', '--Select Size--', '1', 899.00, '2022-09-21 11:20:16', NULL),
(11, 11, 17, 'Red', 'gdr', '1', 400.00, '2022-09-25 03:28:06', NULL),
(12, 12, 18, 'Red', 'Small', '1', 899.00, '2022-09-25 03:35:31', NULL),
(13, 13, 1, 'Red', 'Small', '3', 550.00, '2022-10-07 22:16:26', NULL),
(14, 13, 4, 'Red', 'Small', '1', 2500.00, '2022-10-07 22:16:26', NULL),
(15, 14, 1, 'Red', 'Small', '1', 550.00, '2022-10-18 05:32:20', NULL),
(16, 14, 4, 'Red', 'Small', '1', 2500.00, '2022-10-18 05:32:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mouneshp11@gmail.com', '$2y$10$PoGC/jzp1Bnpqr2TfMxqduxTy0coXAK1bEINJno/oHi1p2G5Ep1OS', '2022-09-13 06:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `product_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tags_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size_hin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_descp_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descp_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_descp_hin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thambnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `digital_product` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `product_name_en`, `product_name_hin`, `product_slug_en`, `product_slug_hin`, `product_code`, `product_qty`, `product_tags_en`, `product_tags_hin`, `product_size_en`, `product_size_hin`, `product_color_en`, `product_color_hin`, `selling_price`, `discount_price`, `short_descp_en`, `short_descp_hin`, `long_descp_en`, `long_descp_hin`, `product_thambnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `digital_product`, `status`, `created_at`, `updated_at`) VALUES
(1, 24, 10, 20, 24, 'Color Block Men Round Neck Grey T-Shirt', 'रंग ब्लॉक पुरुषों गोल गर्दन ग्रे टी शर्ट', 'color-block-men-round-neck-grey-t-shirt', 'रंग-ब्लॉक-पुरुषों-गोल-गर्दन-ग्रे-टी-शर्ट', '122365', '200', 'round', 'round', 'Small, Medium, Large,l,xl,xxl', 'Small, Medium, Large,l,xl,xxl', 'Red, Blue, Black', 'Red, Blue, Black', '550', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'लोरेम इप्सम मुद्रण और टाइपसेटिंग उद्योग का डमी पाठ है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी पाठ रहा है,', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&nbsp;</p>', '<p>लोरेम इप्सम मुद्रण और टाइपसेटिंग उद्योग का डमी पाठ है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी पाठ रहा है, जब एक अज्ञात प्रिंटर ने प्रकार की एक गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए स्क्रैम्बल किया। यह न केवल पांच शताब्दियों से बच गया है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में छलांग भी है, अनिवार्य रूप से अपरिवर्तित रहता है।&nbsp;</p>', '/images/products/main/multi-imagess-1jgrfdotstpwh-nvy-jugular-original-imafhhajsn6yzg2a.jpeg', 1, NULL, NULL, NULL, NULL, 1, '2022-08-10 05:18:27', '2022-08-17 05:06:19'),
(2, 24, 11, 20, 24, 'Color Block Men Round Neck Blue T-Shirt', 'रंग ब्लॉक पुरुषों गोल गर्दन ब्लू टी शर्ट', 'color-block-men-round-neck-blue-t-shirt', 'रंग-ब्लॉक-पुरुषों-गोल-गर्दन-ब्लू-टी-शर्ट', '225563', '300', 'test', 'test', 'Small, Medium, Large', 'Small, Medium, Large', 'Red, Blue, Black', 'Red, Blue, Black', '699', '499', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown', 'लोरेम इप्सम मुद्रण और टाइपसेटिंग उद्योग का डमी पाठ है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी पाठ रहा है, जब एक अज्ञात प्रिंटर ने प्रकार की एक गैली ली और इसे एक प्रकार', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&nbsp;</p>', '<p>लोरेम इप्सम मुद्रण और टाइपसेटिंग उद्योग का डमी पाठ है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी पाठ रहा है, जब एक अज्ञात प्रिंटर ने प्रकार की एक गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए स्क्रैम्बल किया। यह न केवल पांच शताब्दियों से बच गया है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में छलांग भी है, अनिवार्य रूप से अपरिवर्तित रहता है।&nbsp;</p>', '/images/products/main/main-original-imafdfvvr8hqdu65.jpeg', 1, 1, 1, NULL, NULL, 1, '2022-08-10 05:21:32', '2022-08-17 03:58:44'),
(3, 25, 11, 20, 26, 'Color Block Men Round Neck Blue T-Shirt', 'रंग ब्लॉक पुरुषों गोल गर्दन ग्रे टी शर्ट', 'color-block-men-round-neck-blue-t-shirt', 'रंग-ब्लॉक-पुरुषों-गोल-गर्दन-ग्रे-टी-शर्ट', '232433', '200', 'test', 'test', 'Small, Medium, Large', 'Small, Medium, Large', 'Red, Blue, Black', 'Red, Blue, Black', '7844', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unkno', 'लोरेम इप्सम मुद्रण और टाइपसेटिंग उद्योग का डमी पाठ है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी पाठ रहा है, जब एक अज्ञात प्रिंटर ने प्रकार की एक गैली ली और इसे एक प्रकार', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&nbsp;</p>', '<p>लोरेम इप्सम मुद्रण और टाइपसेटिंग उद्योग का डमी पाठ है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी पाठ रहा है, जब एक अज्ञात प्रिंटर ने प्रकार की एक गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए स्क्रैम्बल किया। यह न केवल पांच शताब्दियों से बच गया है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में छलांग भी है, अनिवार्य रूप से अपरिवर्तित रहता है।&nbsp;</p>', '/images/products/main/mainm-askporgf006589-allen-solly-original-imafknsrfjvqsjv5.jpeg', 1, 1, 1, 1, NULL, 1, '2022-08-10 05:26:46', '2022-08-10 05:26:46'),
(4, 25, 10, 20, 26, 'faf111', 'fesfsef111', 'faf111', 'fesfsef111', '4343411', '50011', 'test', 'test', 'Small, Medium, Large,11', 'Small, Medium, Large,11', 'Red, Blue, Black,11', 'Red, Blue, Black,11', '5000', '2500', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when11 an unknow11', 'लोरेम इप्सम मुद्रण और टाइपसेटिंग उद्योग का डमी पाठ है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी पाठ रहा है, जब एक अज्ञात प्रिंटर ने प्रकार की एक गैली ली 11', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 11</p>', '<p>लोरेम इप्सम मुद्रण और टाइपसेटिंग उद्योग का डमी पाठ है। लोरेम इप्सम 1500 के दशक के बाद से उद्योग का मानक डमी पाठ रहा है, जब एक अज्ञात प्रिंटर ने प्रकार की एक गैली ली और इसे एक प्रकार की नमूना पुस्तक बनाने के लिए स्क्रैम्बल किया। यह न केवल पांच शताब्दियों से बच गया है, बल्कि इलेक्ट्रॉनिक टाइपसेटिंग में छलांग भी है, अनिवार्य रूप से अपरिवर्तित रहता है। 11</p>', '/images/products/main/s-rhfavengerdk01df01-r-heaven-fashions-original-imafj4hfeeseprhd.jpeg', 1, NULL, 1, NULL, NULL, 1, '2022-08-10 05:31:37', '2022-09-22 11:12:44'),
(5, 23, 14, 35, 68, 'fsefg', 'sgsegseg', 'fsefg', 'sgsegseg', '122365', '20011', 'test', 'test', 'Small, Medium, Large', 'Small, Medium, Large', 'Red, Blue, Black', 'Red, Blue, Black', '1044', '999', 'gdgsdgvbxzdgsz', 'sgszfgsfgsg', '<p>segshsdgs</p>', '<p>gseghsdgsegseg</p>', '/images/products/main/image_processing20210929-2994-1eghc4e.png', 1, 1, 1, 1, NULL, 1, '2022-08-11 07:22:35', '2022-09-26 03:48:32'),
(13, 23, 14, 35, 68, 'bnfgzsfzs', 'hdgxdv', 'bnfgzsfzs', 'hdgxdv', '464', '544', 'Lorem,Ipsum,Amet', 'Lorem,Ipsum,Amet', 'Small, Medium, Large', 'Small, Medium, Large', 'Red, Blue, Black', 'Red, Blue, Black', '545', '434', 'gbfxcbx bxfgvxd', 'xfdgxdgxdgvxdg', '<p>gxdgxdgxdg</p>', '<p>xgxdgxdgxdgxdg</p>', 'images/products/main/Screenshot (41).png', 1, 1, 1, 1, NULL, 1, '2022-08-22 09:26:13', '2022-09-26 03:48:10'),
(14, 23, 13, 32, 59, 'gfrgxgx', 'gvhjmvhjm', 'gfrgxgx', 'gvhjmvhjm', '43456', '765', 'Lorem,Ipsum,Amet', 'Lorem,Ipsum,Amet', 'f,fe', 'gd,sf', 'Red, Blue, Black', 'Red, Blue, Black', '888', '777', 'dxfgsxdgvxfgbxdrf', 'fxdrggdrfgls sftsejfl; s', '<p>fmselfmsl sfmselfm ksmfpsef</p>', '<p>d;ghkd drgmdrkl;gmdx vmsxdlkgmslgkmvldrmng</p>', 'images/products/main/Screenshot (1) - Copy.png', 1, 1, 1, 1, NULL, 1, '2022-08-22 09:27:14', '2022-09-26 03:47:54'),
(15, 23, 10, 20, 26, 'sefz gth', 'ghtfdgszedfgs', 'sefz-gth', 'ghtfdgszedfgs', '65656', '56546', 'Lorem,Ipsum,Amet', 'Lorem,Ipsum,Amet', 'Small, Medium, Large', 'Small, Medium, Large', 'Red, Blue, Black', 'Red, Blue, Black', '7676', '656', 'adfdf', 'awdfawd', '<p>afawf</p>', '<p>fwafawfaw</p>', 'images/products/main/Screenshot (5) - Copy.png', NULL, NULL, NULL, NULL, NULL, 1, '2022-08-22 09:36:04', '2022-09-22 11:11:27'),
(16, 23, 12, 28, 50, 'sgdyryhdh', 'dhdrhdr', 'sgdyryhdh', 'dhdrhdr', '65655', '148', 'Lorem,Ipsum,Amet', 'Lorem,Ipsum,Amet', 'fes,fe', 'ef,efs', 'Red, Blue, Black, l ,xxl, s, m, xs', 'Red, Blue, Black, l ,xxl, s, m, xs', '656', '545', 'fafafa', 'ffafwawfa', '<p>fawfdth&nbsp;</p>', '<p>gdrtgtse gse</p>', 'images/products/main/Screenshot (24).png', NULL, 1, NULL, NULL, NULL, 1, '2022-08-22 09:37:04', '2022-09-26 03:47:34'),
(17, 26, 11, 24, 37, 'Canon G3021 Multi-function Color Printer with Voice Activated Printing Google Assistant and Alexa  (Black, Ink Tank)', 'वॉयस एक्टिवेटेड प्रिंटिंग गूगल असिस्टेंट और एलेक्सा (ब्लैक, इंक टैंक) के साथ कैनन जी3021 मल्टी-फंक्शन कलर प्रिंटर', 'canon-g3021-multi-function-color-printer-with-voice-activated-printing-google-assistant-and-alexa--(black,-ink-tank)', 'वॉयस-एक्टिवेटेड-प्रिंटिंग-गूगल-असिस्टेंट-और-एलेक्सा-(ब्लैक,-इंक-टैंक)-के-साथ-कैनन-जी3021-मल्टी-फंक्शन-कलर-प्रिंटर', '434343', '22', 'Lorem,Ipsum,Amet', 'Lorem,Ipsum,Amet', 'gdr,sefse', 'fsef,gdrg', 'Red, Blue, Black', 'Red, Blue, Black', '500', '400', 'faszef fsese hdrghdrdr', 'seffsefsefgrdhdrg g sgsde', '<p>fsefgse f</p>', '<p>sefsefasefse</p>', 'images/products/main/amkette-evofox-fireblade-led-backlit-original-imafs67thhmt4dfs.jpeg', 1, 1, 1, 1, NULL, 1, '2022-08-26 02:15:47', '2022-09-26 03:46:33'),
(18, 24, 11, 24, 37, 'frfrf', 'gtgtg', 'frfrf', 'gtgtg', '566565', '667', 'Lorem,Ipsum,Amet', 'Lorem,Ipsum,Amet', 'Small, Medium, Large', 'Small, Medium, Large', 'Red, Blue, Black', 'Red, Blue, Black', '999', '899', 'dhfhff tfhrthyrt', 'rtytyhfth rtyhdfgryhd', '<p>ergd rdrgdrg</p>', '<p>ghdrg ergdrgdrg</p>', 'images/products/main/Screenshot (38).png', NULL, NULL, NULL, NULL, '20220921163140.pdf', 1, '2022-09-21 11:01:43', '2022-09-26 03:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(1, 1, '/images/products/multiImages/multi-imagesm-1jgrfdotstpwh-nvy-jugular-original-imafhhaktkqjzxvy.jpeg', '2022-08-10 05:18:28', '2022-08-10 05:18:28'),
(2, 1, '/images/products/multiImages/mainm-1jgrfdotstpwh-nvy-jugular-original-imafhhakyypxr7av.jpeg', '2022-08-10 05:18:30', '2022-08-10 05:18:30'),
(3, 1, '/images/products/multiImages/multi-imagesxxl-1jgrfdotstpwh-nvy-jugular-original-imafhhak6nzwd4dn.jpeg', '2022-08-10 05:18:30', '2022-08-10 05:18:30'),
(4, 1, '/images/products/multiImages/multi-imagesxxl-1jgrfdotstpwh-nvy-jugular-original-imafhhakxfghf7aa.jpeg', '2022-08-10 05:18:30', '2022-08-10 05:18:30'),
(5, 2, '/images/products/multiImages/Screenshot (21).png', '2022-08-10 05:21:32', '2022-08-11 10:47:11'),
(6, 2, '/images/products/multiImages/Screenshot (26).png', '2022-08-10 05:21:34', '2022-08-11 10:47:12'),
(7, 2, '/images/products/multiImages/multi-images-original-imafey9zzwxwjfum.jpeg', '2022-08-10 05:21:34', '2022-08-10 05:21:34'),
(8, 3, '/images/products/multiImages/multiImagesm-askporgf006589-allen-solly-original-imafknskyfy4jjw6.jpeg', '2022-08-10 05:26:46', '2022-08-10 05:26:46'),
(9, 3, '/images/products/multiImages/multiImagess-askporgf006589-allen-solly-original-imafknshw7g3wzff.jpeg', '2022-08-10 05:26:46', '2022-08-10 05:26:46'),
(10, 3, '/images/products/multiImages/multiImagess-askporgf006589-allen-solly-original-imafknsn2rppyq9m.jpeg', '2022-08-10 05:26:46', '2022-08-10 05:26:46'),
(11, 4, '/images/products/multiImages/s-rhfavengerdk01df01-r-heaven-fashions-original-imafj4hfu9cqvee7.jpeg', '2022-08-10 05:31:37', '2022-08-10 05:31:37'),
(12, 4, '/images/products/multiImages/s-rhfavengerdk01df01-r-heaven-fashions-original-imafj4hfwfz8uweb.jpeg', '2022-08-10 05:31:38', '2022-08-10 05:31:38'),
(13, 5, '/images/products/multiImages/Screenshot (4) - Copy.png', '2022-08-11 07:22:35', '2022-08-11 10:39:39'),
(14, 5, '/images/products/multiImages/Screenshot (4).png', '2022-08-11 07:22:36', '2022-08-11 10:40:13'),
(15, 6, '/images/products/multiImages/Screenshot (1).png', '2022-08-11 10:43:32', '2022-08-11 10:44:17'),
(18, 6, '/images/products/multiImages/Screenshot (5).png', '2022-08-11 10:43:35', '2022-08-11 10:45:16'),
(20, 7, '/images/products/multiImages/reduced_Mounesh_10382.jpg', '2022-08-11 10:51:04', '2022-08-11 10:52:27'),
(28, 13, 'images/products/multiImages/Screenshot (65).png', '2022-08-22 09:26:14', '2022-08-22 09:26:14'),
(29, 13, 'images/products/multiImages/Screenshot (66).png', '2022-08-22 09:26:14', '2022-08-22 09:26:14'),
(30, 13, 'images/products/multiImages/Screenshot (67).png', '2022-08-22 09:26:15', '2022-08-22 09:26:15'),
(31, 13, 'images/products/multiImages/Screenshot (68).png', '2022-08-22 09:26:15', '2022-08-22 09:26:15'),
(32, 14, 'images/products/multiImages/Screenshot (1) - Copy.png', '2022-08-22 09:27:15', '2022-08-22 09:27:15'),
(33, 14, 'images/products/multiImages/Screenshot (1).png', '2022-08-22 09:27:15', '2022-08-22 09:27:15'),
(34, 14, 'images/products/multiImages/Screenshot (2).png', '2022-08-22 09:27:16', '2022-08-22 09:27:16'),
(35, 14, 'images/products/multiImages/Screenshot (3).png', '2022-08-22 09:27:16', '2022-08-22 09:27:16'),
(36, 14, 'images/products/multiImages/Screenshot (4) - Copy.png', '2022-08-22 09:27:17', '2022-08-22 09:27:17'),
(37, 14, 'images/products/multiImages/Screenshot (4).png', '2022-08-22 09:27:17', '2022-08-22 09:27:17'),
(38, 15, 'images/products/multiImages/Screenshot (4) - Copy.png', '2022-08-22 09:36:05', '2022-08-22 09:36:05'),
(39, 16, 'images/products/multiImages/Screenshot (25).png', '2022-08-22 09:37:04', '2022-08-22 09:37:04'),
(40, 16, 'images/products/multiImages/Screenshot (26).png', '2022-08-22 09:37:04', '2022-08-22 09:37:04'),
(41, 16, 'images/products/multiImages/Screenshot (27).png', '2022-08-22 09:37:05', '2022-08-22 09:37:05'),
(42, 16, 'images/products/multiImages/Screenshot (28).png', '2022-08-22 09:37:06', '2022-08-22 09:37:06'),
(43, 17, 'images/products/multiImages/amkette-evofox-fireblade-led-backlit-original-imafs67thhmt4dfs.jpeg', '2022-08-26 02:15:47', '2022-08-26 02:15:47'),
(44, 17, 'images/products/multiImages/lenovo-za540019in-original-imafrr2unrv8rj9t (1).jpeg', '2022-08-26 02:15:47', '2022-08-26 02:15:47'),
(45, 17, 'images/products/multiImages/lenovo-za540019in-original-imafrr2vtxvfyefa.jpeg', '2022-08-26 02:15:47', '2022-08-26 02:15:47'),
(46, 17, 'images/products/multiImages/lenovo-za540019in-original-imafsfvyhrdfhb84.jpeg', '2022-08-26 02:15:48', '2022-08-26 02:15:48'),
(47, 18, 'images/products/multiImages/SEO_bg_img.png', '2022-09-21 11:01:43', '2022-09-21 11:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(191) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `rating`, `comment`, `summary`, `status`, `created_at`, `updated_at`) VALUES
(1, 17, 2, 2, 'feafaefaf', 'dfaed', '1', '2022-09-17 10:06:06', '2022-09-17 11:08:48'),
(2, 17, 2, 5, 'wefwsefe', 'fesef', '1', '2022-09-17 10:06:25', '2022-09-17 11:08:53'),
(3, 17, 2, 4, 'efasefseffews fsfs', 'fseaffw', '1', '2022-09-21 07:42:00', NULL),
(4, 17, 2, 5, 'dwda', 'aseddad', '1', '2022-09-21 08:01:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `google_analytics`, `created_at`, `updated_at`) VALUES
(1, 'meta_title', 'meta_author', 'meta_keyword', 'meta_description', 'google_analytics', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2q0LNVisywn4mtCGDxKUMns5YOrwWNvyJhTnRpg7', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWUJtZXZ2dGJwcEJmT0lCeVNtN2RGMEZuMzd1eG9HVG5kV3Zrb2FQUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRwaGg3NlhQSXNKTE9DQll5WnV1eGFlbnNSL01ubUo2WjVGc3pESXZ2U1RLdHkwT2s2VVBSRyI7czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTk6InBhc3N3b3JkX2hhc2hfYWRtaW4iO3M6NjA6IiQyeSQxMCRSejVYSVVKbEZPOS9WRlZkWmJOdWh1OFVzQkplaU0vUkd5RUhMbjlMMHFJLy9sVUx1RTZWRyI7fQ==', 1719393050);

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(16, 6, 'bbbbbdcd', '2022-09-03 11:36:49', '2022-09-03 11:36:49'),
(17, 9, 'QQQQded', '2022-09-03 11:36:59', '2022-09-03 11:36:59'),
(20, 6, 'zdfcfvrgvxdz', '2022-09-08 04:11:27', '2022-09-08 04:11:27'),
(21, 6, 'sdfgfx', '2022-09-08 04:11:32', '2022-09-08 04:11:32'),
(22, 9, 'zdxffvfxzd', '2022-09-08 04:11:41', '2022-09-08 04:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(6, 'Belagavi', '2022-09-03 11:35:21', '2022-09-03 11:35:21'),
(7, 'swds', '2022-09-03 11:36:10', '2022-09-03 11:36:10'),
(8, 'vfdsv', '2022-09-03 11:36:18', '2022-09-03 11:36:18'),
(9, 'qqqq', '2022-09-03 11:36:33', '2022-09-03 11:36:33'),
(10, 'sdfsxdfgvxdc', '2022-09-08 04:11:11', '2022-09-08 04:11:11'),
(11, 'gfc', '2022-09-08 04:11:14', '2022-09-08 04:11:14'),
(12, 'ghtedsf', '2022-09-08 04:11:18', '2022-09-08 04:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 6, 16, 'eesaasder', '2022-09-03 11:52:25', '2022-09-03 11:52:25'),
(3, 6, 16, 'awdwas', '2022-09-05 06:00:47', '2022-09-05 06:00:47'),
(4, 6, 16, 'asdAZSDsca', '2022-09-08 04:11:52', '2022-09-08 04:11:52'),
(5, 9, 17, 'Dxafdsza', '2022-09-08 04:12:06', '2022-09-08 04:12:06'),
(6, 6, 16, 'fzsdcfzfdsc', '2022-09-08 04:12:13', '2022-09-08 04:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `phone_one`, `phone_two`, `email`, `company_name`, `company_address`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'images/logo/png', '07483573859', '07483573859', 'mouneshp11@gmail.com', 'Shipfy', 'H no 851/2 aacharya galli shahapur belagavi', 'https://www.instagram.com/mounesh_p1199/', 'https://www.instagram.com/mounesh_p1199/', 'https://www.instagram.com/mounesh_p1199/', 'https://www.instagram.com/mounesh_p1199/', NULL, '2022-09-16 22:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `title`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(3, 'images/sliders/0d3f9452916609.5921c4e206fcc.jpg', 'test', 'test', 1, '2022-08-20 02:20:59', '2022-08-20 02:20:59'),
(4, 'images/sliders/8.jpg', 'waw', 'adawd', 1, '2022-08-20 02:21:12', '2022-08-20 02:21:12'),
(5, 'images/sliders/91a7d4e5ff72168406b799977c717c0e.jpg', 'rgd', 'sef', 0, '2022-08-20 02:21:23', '2022-08-20 02:23:24'),
(6, 'images/sliders/bf384e8c71ac4bb0f54891ecf2295b9a.jpg', 'sfsef', 'sfef', 1, '2022-08-20 02:21:33', '2022-08-20 02:21:33'),
(7, 'images/sliders/BlackFriday_StoreWF.jpg', 'gdrg', 'dwadgsef', 0, '2022-08-20 02:21:43', '2022-08-20 02:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_name_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub_category_name_en`, `sub_category_name_hin`, `sub_category_slug_en`, `sub_category_slug_hin`, `created_at`, `updated_at`) VALUES
(20, 10, 'Mans Top Ware', 'Mans शीर्ष वेयर', 'mans-top-ware', 'Mans-शीर्ष-वेयर', '2022-08-10 00:59:30', '2022-08-10 00:59:30'),
(21, 10, 'Mans Bottom Ware', 'Mans नीचे वेयर', 'mans-bottom-ware', 'Mans-नीचे-वेयर', '2022-08-10 01:00:07', '2022-08-10 01:00:07'),
(22, 10, 'Mans Footwear', 'मैन्स फुटवियर', 'mans-footwear', 'मैन्स-फुटवियर', '2022-08-10 01:00:27', '2022-08-10 01:00:27'),
(23, 10, 'Women Footwear', 'महिलाओं के जूते', 'women-footwear', 'महिलाओं-के-जूते', '2022-08-10 01:00:54', '2022-08-10 01:00:54'),
(24, 11, 'Computer Peripherals', 'कंप्यूटर बाह्य उपकरण', 'computer-peripherals', 'कंप्यूटर-बाह्य-उपकरण', '2022-08-10 01:02:13', '2022-08-10 01:02:13'),
(25, 11, 'Mobile Accessory', 'मोबाइल सहायक', 'mobile-accessory', 'मोबाइल-सहायक', '2022-08-10 01:02:48', '2022-08-10 01:02:48'),
(26, 11, 'Gaming', 'गेमिंग', 'gaming', 'गेमिंग', '2022-08-10 01:03:06', '2022-08-10 01:03:06'),
(27, 12, 'Home Furnishings', 'होम फर्निशिंग', 'home-furnishings', 'होम-फर्निशिंग', '2022-08-10 01:04:00', '2022-08-10 01:04:00'),
(28, 12, 'Living Room', 'लिविंग रूम', 'living-room', 'लिविंग-रूम', '2022-08-10 01:04:20', '2022-08-10 01:04:20'),
(29, 12, 'Home Decor', 'होम सजावट', 'home-decor', 'होम-सजावट', '2022-08-10 01:04:37', '2022-08-10 01:04:37'),
(30, 13, 'Televisions', 'टेलीविजन', 'televisions', 'टेलीविजन', '2022-08-10 01:05:15', '2022-08-10 01:05:15'),
(32, 13, 'Washing Machines', 'वाशिंग मशीनें', 'washing-machines', 'वाशिंग-मशीनें', '2022-08-10 01:06:36', '2022-08-10 01:06:36'),
(33, 13, 'Refrigerators', 'रेफ्रिजरेटर', 'refrigerators', 'रेफ्रिजरेटर', '2022-08-10 01:06:54', '2022-08-10 01:06:54'),
(34, 14, 'Beauty and Personal Care', 'सौंदर्य और व्यक्तिगत देखभाल', 'beauty-and-personal-care', 'सौंदर्य-और-व्यक्तिगत-देखभाल', '2022-08-10 01:07:35', '2022-08-10 01:07:35'),
(35, 14, 'Food and Drinks', 'फूड और ड्रिंक्स', 'food-and-drinks', 'फूड-और-ड्रिंक्स', '2022-08-10 01:07:56', '2022-08-10 01:07:56'),
(36, 14, 'Bady Care', 'बैडी केयर', 'bady-care', 'बैडी-केयर', '2022-08-10 01:08:11', '2022-08-10 01:08:11'),
(37, 15, 'Baby Care', 'बैडी केयर', 'baby-care', 'बैडी-केयर', '2022-09-26 03:50:29', '2022-09-26 03:50:29'),
(38, 16, 'Indore games', 'Indore games', 'indore-games', 'Indore-games', '2022-09-26 03:50:57', '2022-09-26 03:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `sub_sub_category_name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_category_name_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_category_slug_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_sub_category_slug_hin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `sub_category_id`, `sub_sub_category_name_en`, `sub_sub_category_name_hin`, `sub_sub_category_slug_en`, `sub_sub_category_slug_hin`, `created_at`, `updated_at`) VALUES
(24, 10, 20, 'Mans Tshirt', 'मैन्स टीशर्ट', 'mans-tshirt', 'मैन्स-टीशर्ट', '2022-08-10 01:09:23', '2022-08-10 01:09:23'),
(25, 10, 20, 'Mans Casual Shirts', 'आदमी आकस्मिक शर्ट', 'mans-casual-shirts', 'आदमी-आकस्मिक-शर्ट', '2022-08-10 01:09:47', '2022-08-10 01:09:47'),
(26, 10, 20, 'Mans Kurtas', 'मैन के कुर्ते', 'mans-kurtas', 'मैन-के-कुर्ते', '2022-08-10 01:10:08', '2022-08-10 01:10:08'),
(27, 10, 21, 'Mans Jeans', 'मैन्स जीन्स', 'mans-jeans', 'मैन्स-जीन्स', '2022-08-10 01:10:33', '2022-08-10 01:10:33'),
(28, 10, 21, 'Mans Trousers', 'मैन्स पतलून', 'mans-trousers', 'मैन्स-पतलून', '2022-08-10 01:10:53', '2022-08-10 01:10:53'),
(29, 10, 21, 'Mans Cargos', 'मैन्स कार्गो', 'mans-cargos', 'मैन्स-कार्गो', '2022-08-10 01:11:21', '2022-08-10 01:11:21'),
(30, 10, 22, 'Mans Sports Shoes', 'मैन्स स्पोर्ट्स शूज', 'mans-sports-shoes', 'मैन्स-स्पोर्ट्स-शूज', '2022-08-10 01:12:29', '2022-08-10 01:12:29'),
(31, 10, 22, 'Mans Casual Shoes', 'आदमी आकस्मिक जूते', 'mans-casual-shoes', 'आदमी-आकस्मिक-जूते', '2022-08-10 01:12:53', '2022-08-10 01:12:53'),
(32, 10, 22, 'Mans Formal Shoes', 'आदमी के औपचारिक जूते', 'mans-formal-shoes', 'आदमी-के-औपचारिक-जूते', '2022-08-10 01:13:12', '2022-08-10 01:13:12'),
(33, 10, 23, 'Women Flats', 'महिला फ्लैट्स', 'women-flats', 'महिला-फ्लैट्स', '2022-08-10 01:13:55', '2022-08-10 01:13:55'),
(34, 10, 23, 'Women Heels', 'महिला ऊँची एड़ी के जूते', 'women-heels', 'महिला-ऊँची-एड़ी-के-जूते', '2022-08-10 01:14:21', '2022-08-10 01:14:21'),
(35, 10, 23, 'Woman Sneakers', 'महिला स्नीकर्स', 'woman-sneakers', 'महिला-स्नीकर्स', '2022-08-10 01:14:44', '2022-08-10 01:14:44'),
(36, 11, 24, 'Printers', 'प्रिंटर', 'printers', 'प्रिंटर', '2022-08-10 01:16:10', '2022-08-10 01:16:10'),
(37, 11, 24, 'Monitors', 'मॉनिटर', 'monitors', 'मॉनिटर', '2022-08-10 01:16:38', '2022-08-10 01:16:38'),
(38, 11, 24, 'Projectors', 'प्रोजेक्टर', 'projectors', 'प्रोजेक्टर', '2022-08-10 01:16:56', '2022-08-10 01:16:56'),
(39, 11, 25, 'Plain Cases', 'सादे मामलों', 'plain-cases', 'सादे-मामलों', '2022-08-10 01:17:41', '2022-08-10 01:17:41'),
(40, 11, 25, 'Designer Cases', 'डिज़ाइनर मामले', 'designer-cases', 'डिज़ाइनर-मामले', '2022-08-10 01:18:32', '2022-08-10 01:18:32'),
(41, 11, 25, 'Screen Guards', 'स्क्रीन गार्ड', 'screen-guards', 'स्क्रीन-गार्ड', '2022-08-10 01:18:59', '2022-08-10 01:18:59'),
(42, 11, 26, 'Gaming Mouse', 'गेमिंग माउस', 'gaming-mouse', 'गेमिंग-माउस', '2022-08-10 01:19:32', '2022-08-10 01:19:32'),
(43, 11, 26, 'Gaming Keyboars', 'गेमिंग कीबोअर्स', 'gaming-keyboars', 'गेमिंग-कीबोअर्स', '2022-08-10 01:19:59', '2022-08-10 01:19:59'),
(44, 11, 26, 'Gaming Mousepads', 'गेमिंग माउसपैड', 'gaming-mousepads', 'गेमिंग-माउसपैड', '2022-08-10 01:20:50', '2022-08-10 01:20:50'),
(45, 12, 27, 'Bed Liners', 'बेड लाइनर', 'bed-liners', 'बेड-लाइनर', '2022-08-10 01:21:55', '2022-08-10 01:21:55'),
(46, 12, 27, 'Bedsheets', 'बेडशीट', 'bedsheets', 'बेडशीट', '2022-08-10 01:22:20', '2022-08-10 01:22:20'),
(47, 12, 27, 'Blankets', 'कंबल', 'blankets', 'कंबल', '2022-08-10 01:22:51', '2022-08-10 01:22:51'),
(48, 12, 28, 'Tv Units', 'टीवी इकाइयों', 'tv-units', 'टीवी-इकाइयों', '2022-08-10 01:23:11', '2022-08-10 01:23:11'),
(49, 12, 28, 'Dining Sets', 'भोजन सेट', 'dining-sets', 'भोजन-सेट', '2022-08-10 01:23:33', '2022-08-10 01:23:33'),
(50, 12, 28, 'Coffee Tables', 'कॉफी टेबल', 'coffee-tables', 'कॉफी-टेबल', '2022-08-10 01:23:52', '2022-08-10 01:23:52'),
(51, 12, 29, 'Lightings', 'लाइटिंग्स', 'lightings', 'लाइटिंग्स', '2022-08-10 01:24:09', '2022-08-10 01:24:09'),
(52, 12, 29, 'Clocks', 'घड़ियाँ', 'clocks', 'घड़ियाँ', '2022-08-10 01:24:27', '2022-08-10 01:24:27'),
(53, 12, 29, 'Wall Decor', 'दीवार सजावट', 'wall-decor', 'दीवार-सजावट', '2022-08-10 01:24:51', '2022-08-10 01:24:51'),
(54, 13, 30, 'Big Screen TVs', 'बिग स्क्रीन टीवी', 'big-screen-tvs', 'बिग-स्क्रीन-टीवी', '2022-08-10 01:26:24', '2022-08-10 01:26:24'),
(55, 13, 30, 'Smart TVs', 'स्मार्ट टीवी', 'smart-tvs', 'स्मार्ट-टीवी', '2022-08-10 01:26:46', '2022-08-10 01:26:46'),
(56, 13, 30, 'OLED TVs', 'ओएलईडी टीवी', 'oled-tvs', 'ओएलईडी-टीवी', '2022-08-10 01:27:35', '2022-08-10 01:27:35'),
(57, 13, 32, 'Washer Dryers', 'वॉशर ड्रायर', 'washer-dryers', 'वॉशर-ड्रायर', '2022-08-10 01:27:53', '2022-08-10 01:27:53'),
(58, 13, 32, 'Washer Only', 'केवल वॉशर', 'washer-only', 'केवल-वॉशर', '2022-08-10 01:28:12', '2022-08-10 01:28:12'),
(59, 13, 32, 'Energy Efficient', 'ऊर्जा कुशल', 'energy-efficient', 'ऊर्जा-कुशल', '2022-08-10 01:28:34', '2022-08-10 01:28:34'),
(60, 13, 33, 'Single Door', 'एकल दरवाजा', 'single-door', 'एकल-दरवाजा', '2022-08-10 01:29:02', '2022-08-10 01:29:02'),
(61, 13, 33, 'Double Door', 'डबल दरवाजा', 'double-door', 'डबल-दरवाजा', '2022-08-10 01:29:24', '2022-08-10 01:29:24'),
(62, 13, 33, 'Mini Rerigerators', 'मिनी Rerigerators', 'mini-rerigerators', 'मिनी-Rerigerators', '2022-08-10 01:29:41', '2022-08-10 01:29:41'),
(63, 14, 34, 'Eys Makeup', 'ईस मेकअप', 'eys-makeup', 'ईस-मेकअप', '2022-08-10 01:32:10', '2022-08-10 01:32:10'),
(64, 14, 34, 'Lip Makeup', 'लिप मेकअप', 'lip-makeup', 'लिप-मेकअप', '2022-08-10 01:32:37', '2022-08-10 01:32:37'),
(65, 14, 34, 'Hair Care', 'बालों की देखभाल', 'hair-care', 'बालों-की-देखभाल', '2022-08-10 01:32:56', '2022-08-10 01:32:56'),
(66, 14, 35, 'Beverages', 'पेय पदार्थ', 'beverages', 'पेय-पदार्थ', '2022-08-10 01:33:20', '2022-08-10 01:33:20'),
(67, 14, 35, 'Chocolates', 'चॉकलेट', 'chocolates', 'चॉकलेट', '2022-08-10 01:33:39', '2022-08-10 01:33:39'),
(68, 14, 35, 'Snacks', 'स्नैक्स', 'snacks', 'स्नैक्स', '2022-08-10 01:33:57', '2022-08-10 01:33:57'),
(69, 14, 36, 'Baby Diapers', 'बेबी डायपर', 'baby-diapers', 'बेबी-डायपर', '2022-08-10 01:34:20', '2022-08-10 01:34:20'),
(70, 14, 36, 'Baby Wipes', 'बेबी पोंछे', 'baby-wipes', 'बेबी-पोंछे', '2022-08-10 01:34:38', '2022-08-10 01:34:38'),
(71, 14, 36, 'Baby Food', 'बेबी फूड', 'baby-food', 'बेबी-फूड', '2022-08-10 01:35:12', '2022-08-10 01:35:12'),
(72, 15, 37, 'Powder', 'Powder', 'powder', 'Powder', '2022-09-26 03:51:30', '2022-09-26 03:51:30'),
(73, 16, 38, 'Table Tennis', 'Table Tennis', 'table-tennis', 'Table-Tennis', '2022-09-26 03:51:47', '2022-09-26 03:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `last_seen`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'Mounesh Pattar', 'mouneshp11@gmail.com', '8880508336', '2024-06-26 09:10:24', NULL, '$2y$10$phh76XPIsJLOCBYyZuuxaensR/MnmJ6Z5FszDIvvSTKty0Ok6UPRG', NULL, NULL, NULL, '9RklTm4LXPrKAVOYeI3LnAnBL74n4FdMxgoSW72lrw3jwaovHTbukxQkmAQp', NULL, '20220841615image_processing20210929-2994-1eghc4e.png', '2022-08-01 01:04:02', '2024-06-26 03:40:24'),
(3, 'demo', 'demo@gmail.com', '2255663321', '2022-09-15 10:31:20', NULL, '$2y$10$Up0Hu/gk8p22sprL/b8BB.Slr8doA9oZNrGFnUFblQEu272BAjq2C', NULL, NULL, NULL, NULL, NULL, '20220990926Screenshot (112).png', '2022-08-04 03:24:12', '2022-09-15 05:01:20'),
(7, 'user', 'user@email.com', '1122336654', NULL, NULL, '$2y$10$DY9o1vnNnJ3MhsaX4/udxeJI6OP3vHR7nEd7l/5XgDM6iTJs6musu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-05 07:21:55', '2022-08-05 07:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(23, 2, 14, '2022-08-26 02:42:40', '2022-08-26 02:42:40'),
(24, 2, 13, '2022-08-26 02:42:43', '2022-08-26 02:42:43'),
(26, 2, 17, '2022-08-27 03:55:42', '2022-08-27 03:55:42'),
(27, 2, 16, '2022-08-27 09:08:45', '2022-08-27 09:08:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `ship_districts`
--
ALTER TABLE `ship_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_states`
--
ALTER TABLE `ship_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_post_categories`
--
ALTER TABLE `blog_post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ship_states`
--
ALTER TABLE `ship_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
