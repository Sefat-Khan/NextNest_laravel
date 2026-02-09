<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
</head>
<body>

  <h1>NextNets Laravel</h1>
  <p><strong>NextNets</strong> is a full Laravel-based web application for the Nextnest website.  
  Live site: <a href="https://nextnestbd.com/">https://nextnestbd.com/</a></p>

  <h2>Features</h2>
  <ul>
    <li>Built with <strong>Laravel</strong> (PHP)</li>
    <li>MVC architecture</li>
    <li>Blade templating for views</li>
    <li>Responsive frontend</li>
    <li>Configured with Tailwind CSS & Vite</li>
    <li>Environment-based configuration support</li>
    <li>Easy to customize and extend</li>
  </ul>

  <h2>Live Demo</h2>
  <p><a href="https://nextnestbd.com/">https://nextnestbd.com/</a> (Production)</p>

  <h2>Tech Stack</h2>
  <table>
    <tr>
      <th>Technology</th>
      <th>Purpose</th>
    </tr>
    <tr>
      <td>Laravel (PHP)</td>
      <td>Backend framework</td>
    </tr>
    <tr>
      <td>Blade</td>
      <td>Server-side templating</td>
    </tr>
    <tr>
      <td>Tailwind CSS</td>
      <td>Utility-first CSS framework</td>
    </tr>
    <tr>
      <td>Vite</td>
      <td>Asset bundling</td>
    </tr>
    <tr>
      <td>MySQL/PostgreSQL</td>
      <td>Database</td>
    </tr>
  </table>

  <h2>Repository Structure</h2>
  <pre>
app/                → Laravel application logic
bootstrap/          → Framework bootstrap files
config/             → Application configuration
database/           → Migrations & seeders
public/             → Public assets & entry point
resources/          → Views, CSS/JS, images
routes/             → Web and API routes
storage/            → Logs & compiled views
tests/              → Automated tests
.env.example        → Environment sample file
  </pre>

  <h2>Requirements</h2>
  <ul>
    <li>PHP >= 8.1</li>
    <li>Composer</li>
    <li>Node.js & npm/yarn</li>
    <li>Database (MySQL / PostgreSQL / SQLite)</li>
  </ul>

  <h2>Installation</h2>
  <ol>
    <li><strong>Clone the repository</strong>
      <pre>git clone https://github.com/Sefat-Khan/NextNets_laravel.git
cd NextNets_laravel</pre>
    </li>
    <li><strong>Install PHP dependencies</strong>
      <pre>composer install</pre>
    </li>
    <li><strong>Install frontend dependencies</strong>
      <pre>npm install
# or
yarn install</pre>
    </li>
    <li><strong>Copy environment file</strong>
      <pre>cp .env.example .env</pre>
    </li>
    <li><strong>Generate application key</strong>
      <pre>php artisan key:generate</pre>
    </li>
    <li><strong>Configure .env</strong>
      <pre>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db
DB_USERNAME=your_user
DB_PASSWORD=your_password
      </pre>
    </li>
    <li><strong>Run migrations (if any)</strong>
      <pre>php artisan migrate</pre>
    </li>
    <li><strong>Build assets</strong>
      <pre>npm run dev
# or
npm run build</pre>
    </li>
    <li><strong>Serve locally</strong>
      <pre>php artisan serve</pre>
      The app should now be running at <code>http://localhost:8000</code>
    </li>
  </ol>

  <h2>Testing</h2>
  <pre>php artisan test</pre>

  <h2>Deployment</h2>
  <p>Common deployment steps:</p>
  <ul>
    <li>Upload files to server</li>
    <li>Set up <code>.env</code> with live credentials</li>
    <li>Run <code>composer install</code> and <code>npm build</code></li>
    <li>Run migrations and set proper permissions</li>
    <li>Point domain to <code>public/</code> directory</li>
  </ul>

  <h2>Contributing</h2>
  <p>Contributions are welcome! Please open issues or pull requests for bug fixes, enhancements, or discussion.</p>

  <h2>License</h2>
  <p>This project is open-source — feel free to use and modify as needed.</p>

  <h2>Support</h2>
  <p>For support, contact the maintainer or open an issue in this repository.</p>

</body>
</html>
