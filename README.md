# Jolly LLB Chatbot

This project is a simple chatbot named "Jolly LLB" that aims to provide information related to Indian law.

## Overview

The chatbot consists of a front-end (HTML, CSS, JavaScript) for user interaction and a back-end (PHP) to process user queries and fetch responses. Currently, it uses the Google Custom Search API to retrieve information based on user input.

**Key Features:**

* Simple and intuitive chat interface.
* Ability to ask legal questions in plain language.
* Displays search results with titles, snippets, and clickable URLs.

## Current Technology Stack

* **Front-end:**
    * HTML
    * CSS (for basic styling)
    * JavaScript (for handling user input and displaying responses)
* **Back-end:**
    * PHP (for handling API requests)
* **API:**
    * Google Custom Search API (for fetching legal information)

## Setup (for Local Development)

1.  **Install XAMPP:** You'll need a local web server environment to run the PHP back-end. Download and install XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
2.  **Place Project Files:**
    * Place the `index.html` file in the `htdocs` directory of your XAMPP installation.
    * Create a folder named (for example) `chatbot_backend` inside the `htdocs` directory and place the `chatbot_api.php` file within it (`htdocs/chatbot_backend/chatbot_api.php`).
3.  **Configure Google Custom Search API:**
    * You'll need a Google Cloud Project.
    * Enable the "Custom Search API".
    * Create an API key.
    * Create a Custom Search Engine and configure it to search the desired legal resources (e.g., government websites, legal databases).
    * Replace `'YOUR_GOOGLE_SEARCH_API_KEY'` and `'YOUR_SEARCH_ENGINE_ID'` in `chatbot_api.php` with your actual API key and Search Engine ID.
4.  **Start XAMPP:** Start the Apache server in the XAMPP control panel.
5.  **Access the Chatbot:** Open your web browser and navigate to `http://localhost/index.html` (or the appropriate path if you placed `index.html` in a subdirectory).

## Deployment (Public - Free Option)

1.  **Front-end (Netlify):**
    * Create a GitHub repository and upload your `index.html`, CSS, and JavaScript files.
    * Sign up for a free Netlify account at [https://www.netlify.com/](https://www.netlify.com/).
    * Connect your Netlify account to your GitHub repository and deploy the site. Netlify will provide a public URL (e.g., `your-site.netlify.app`).
    * Update the `fetch` URL in your `index.html` to point to your PHP back-end URL (see step 2 below).
2.  **Back-end (Free PHP Hosting - with limitations):**
    * Choose a free PHP hosting provider (e.g., 000webhost, InfinityFree). Be aware of the limitations of free hosting (ads, storage limits, etc.).
    * Sign up for an account and upload your `chatbot_api.php` file to their server (usually in the `public_html` directory).
    * Obtain the public URL of your `chatbot_api.php` file (e.g., `your-free-host.com/chatbot_api.php`).
    * **CORS Configuration (if needed):** In your `chatbot_api.php`, you might need to add CORS headers to allow requests from your Netlify domain:
        ```php
        header('Access-Control-Allow-Origin: [https://your-site.netlify.app](https://your-site.netlify.app)');
        header('Access-Control-Allow-Methods: POST, GET');
        ```
3.  **Connect Front-end to Back-end:** In your `index.html` file on Netlify, change the `fetch` request URL to the public URL of your `chatbot_api.php` file.

## Future Improvements

* **Integrate a more advanced Language Model (e.g., Gemini API):** To provide more direct, analytical, and contextually relevant answers.
* **Improve Search Relevance:** Implement better filtering or use specialized legal search engines.
* **Enhance User Interface:** Create a more visually appealing and user-friendly chat interface.
* **Add Legal Disclaimers:** Clearly state that the information provided is for informational purposes only and not legal advice.
* **Error Handling:** Implement more robust error handling on both the front-end and back-end.
* **User Authentication (if needed):** For more advanced features or personalized experiences.

## Disclaimer

This chatbot provides information based on search results and is intended for informational purposes only. It does not provide legal advice, and you should consult with a qualified legal professional for any specific legal questions or concerns.
