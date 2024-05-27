<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* shared/menuadmin.html.twig */
class __TwigTemplate_f03f469022d99b80884a91a0106aa6c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/menuadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/menuadmin.html.twig"));

        yield "<!-- Bouton pour ouvrir le dropdown administration -->
<div class=\"relative\">
    <button class=\"text-black hover:text-gray-700 focus:outline-none\" id=\"administration-menu-toggle\">
        Administration <i class=\"fas fa-caret-down\"></i>
    </button>

    <!-- Dropdown menu administration -->
    <div class=\"absolute right-0 mt-2 w-64 bg-white rounded-md shadow-lg z-10 hidden\" id=\"administration-menu\">
        <div class=\"py-1\" role=\"none\">
            <!-- Section Utilisateurs -->
            <div class=\"relative\">
                <button class=\"block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none\" id=\"users-menu-toggle\">
                    Utilisateurs <i class=\"fas fa-caret-down absolute right-4\"></i>
                </button>
                <div class=\"absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg z-10 hidden\" id=\"users-menu\">
                    <a href=\"#users-management\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Gestion des utilisateurs</a>
                    <a href=\"#roles-management\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Gestion des rôles</a>
                </div>
            </div>

            <!-- Section Paramètres -->
            <div class=\"relative\">
                <button class=\"block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none\" id=\"settings-menu-toggle\">
                    Paramètres <i class=\"fas fa-caret-down absolute right-4\"></i>
                </button>
                <div class=\"absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg z-10 hidden\" id=\"settings-menu\">
                    <a href=\"#site-settings\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Paramètres du site</a>
                    <a href=\"#email-settings\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Paramètres d'email</a>
                </div>
            </div>

            <!-- Section Journaux -->
            <div class=\"relative\">
                <button class=\"block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none\" id=\"logs-menu-toggle\">
                    Journaux <i class=\"fas fa-caret-down absolute right-4\"></i>
                </button>
                <div class=\"absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg z-10 hidden\" id=\"logs-menu\">
                    <a href=\"#audit-logs\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Journaux d'audit</a>
                    <a href=\"#error-logs\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Journaux d'erreur</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var administrationMenuToggle = document.getElementById('administration-menu-toggle');
        var administrationMenu = document.getElementById('administration-menu');

        // Fonction pour fermer le menu administration
        function closeAdministrationMenu() {
            administrationMenu.classList.add('hidden');
        }

        // Fonction pour fermer les sous-menus lorsqu'on appuie sur Échap
        function closeSubmenus() {
            var submenus = document.querySelectorAll('.relative .absolute');
            submenus.forEach(function(submenu) {
                submenu.classList.add('hidden');
            });
        }

        // Fermer les sous-menus lorsqu'on appuie sur Échap
        document.addEventListener('keydown', function(event) {
            if (event.key === \"Escape\") {
                closeSubmenus();
                closeAdministrationMenu();
            }
        });

        // Gestion de l'ouverture et de la fermeture du menu administration
        administrationMenuToggle.addEventListener('click', function() {
            administrationMenu.classList.toggle('hidden');
        });

        // Gestion de l'ouverture et de la fermeture des sous-menus
        var usersMenuToggle = document.getElementById('users-menu-toggle');
        var usersMenu = document.getElementById('users-menu');
        var settingsMenuToggle = document.getElementById('settings-menu-toggle');
        var settingsMenu = document.getElementById('settings-menu');
        var logsMenuToggle = document.getElementById('logs-menu-toggle');
        var logsMenu = document.getElementById('logs-menu');

        usersMenuToggle.addEventListener('click', function(event) {
            event.stopPropagation(); // Pour éviter que le clic ne ferme le menu principal
            usersMenu.classList.toggle('hidden');
            settingsMenu.classList.add('hidden');
            logsMenu.classList.add('hidden');
        });

        settingsMenuToggle.addEventListener('click', function(event) {
            event.stopPropagation(); // Pour éviter que le clic ne ferme le menu principal
            usersMenu.classList.add('hidden');
            settingsMenu.classList.toggle('hidden');
            logsMenu.classList.add('hidden');
        });

        logsMenuToggle.addEventListener('click', function(event) {
            event.stopPropagation(); // Pour éviter que le clic ne ferme le menu principal
            usersMenu.classList.add('hidden');
            settingsMenu.classList.add('hidden');
            logsMenu.classList.toggle('hidden');
        });

        // Fermer les menus si on clique ailleurs sur la page
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.relative')) {
                closeSubmenus();
                closeAdministrationMenu();
            }
        });

    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shared/menuadmin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Bouton pour ouvrir le dropdown administration -->
<div class=\"relative\">
    <button class=\"text-black hover:text-gray-700 focus:outline-none\" id=\"administration-menu-toggle\">
        Administration <i class=\"fas fa-caret-down\"></i>
    </button>

    <!-- Dropdown menu administration -->
    <div class=\"absolute right-0 mt-2 w-64 bg-white rounded-md shadow-lg z-10 hidden\" id=\"administration-menu\">
        <div class=\"py-1\" role=\"none\">
            <!-- Section Utilisateurs -->
            <div class=\"relative\">
                <button class=\"block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none\" id=\"users-menu-toggle\">
                    Utilisateurs <i class=\"fas fa-caret-down absolute right-4\"></i>
                </button>
                <div class=\"absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg z-10 hidden\" id=\"users-menu\">
                    <a href=\"#users-management\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Gestion des utilisateurs</a>
                    <a href=\"#roles-management\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Gestion des rôles</a>
                </div>
            </div>

            <!-- Section Paramètres -->
            <div class=\"relative\">
                <button class=\"block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none\" id=\"settings-menu-toggle\">
                    Paramètres <i class=\"fas fa-caret-down absolute right-4\"></i>
                </button>
                <div class=\"absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg z-10 hidden\" id=\"settings-menu\">
                    <a href=\"#site-settings\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Paramètres du site</a>
                    <a href=\"#email-settings\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Paramètres d'email</a>
                </div>
            </div>

            <!-- Section Journaux -->
            <div class=\"relative\">
                <button class=\"block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none\" id=\"logs-menu-toggle\">
                    Journaux <i class=\"fas fa-caret-down absolute right-4\"></i>
                </button>
                <div class=\"absolute left-full top-0 mt-0 w-64 bg-white rounded-md shadow-lg z-10 hidden\" id=\"logs-menu\">
                    <a href=\"#audit-logs\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Journaux d'audit</a>
                    <a href=\"#error-logs\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Journaux d'erreur</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var administrationMenuToggle = document.getElementById('administration-menu-toggle');
        var administrationMenu = document.getElementById('administration-menu');

        // Fonction pour fermer le menu administration
        function closeAdministrationMenu() {
            administrationMenu.classList.add('hidden');
        }

        // Fonction pour fermer les sous-menus lorsqu'on appuie sur Échap
        function closeSubmenus() {
            var submenus = document.querySelectorAll('.relative .absolute');
            submenus.forEach(function(submenu) {
                submenu.classList.add('hidden');
            });
        }

        // Fermer les sous-menus lorsqu'on appuie sur Échap
        document.addEventListener('keydown', function(event) {
            if (event.key === \"Escape\") {
                closeSubmenus();
                closeAdministrationMenu();
            }
        });

        // Gestion de l'ouverture et de la fermeture du menu administration
        administrationMenuToggle.addEventListener('click', function() {
            administrationMenu.classList.toggle('hidden');
        });

        // Gestion de l'ouverture et de la fermeture des sous-menus
        var usersMenuToggle = document.getElementById('users-menu-toggle');
        var usersMenu = document.getElementById('users-menu');
        var settingsMenuToggle = document.getElementById('settings-menu-toggle');
        var settingsMenu = document.getElementById('settings-menu');
        var logsMenuToggle = document.getElementById('logs-menu-toggle');
        var logsMenu = document.getElementById('logs-menu');

        usersMenuToggle.addEventListener('click', function(event) {
            event.stopPropagation(); // Pour éviter que le clic ne ferme le menu principal
            usersMenu.classList.toggle('hidden');
            settingsMenu.classList.add('hidden');
            logsMenu.classList.add('hidden');
        });

        settingsMenuToggle.addEventListener('click', function(event) {
            event.stopPropagation(); // Pour éviter que le clic ne ferme le menu principal
            usersMenu.classList.add('hidden');
            settingsMenu.classList.toggle('hidden');
            logsMenu.classList.add('hidden');
        });

        logsMenuToggle.addEventListener('click', function(event) {
            event.stopPropagation(); // Pour éviter que le clic ne ferme le menu principal
            usersMenu.classList.add('hidden');
            settingsMenu.classList.add('hidden');
            logsMenu.classList.toggle('hidden');
        });

        // Fermer les menus si on clique ailleurs sur la page
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.relative')) {
                closeSubmenus();
                closeAdministrationMenu();
            }
        });

    });
</script>
", "shared/menuadmin.html.twig", "/var/www/html/doc-and-go/templates/shared/menuadmin.html.twig");
    }
}
