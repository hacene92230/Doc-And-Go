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

/* shared/menuuser.html.twig */
class __TwigTemplate_106227d49ad22217bac8f227fc41123e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/menuuser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/menuuser.html.twig"));

        // line 1
        yield "<div class=\"relative\">
    <!-- Bouton pour ouvrir le dropdown utilisateur -->
    <button class=\"text-black hover:text-gray-700 focus:outline-none\" id=\"user-menu-toggle\">
        <i class=\"fas fa-user mr-2\"></i> ";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "firstName", [], "any", false, false, false, 4), "html", null, true);
        yield " <i class=\"fas fa-caret-down\"></i>
    </button>

    <!-- Dropdown menu utilisateur -->
    <div class=\"absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 hidden\" id=\"user-menu\">
        <div class=\"py-1\" role=\"none\">
            <a href=\"";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Modifier mon profil</a>
            <a href=\"";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]), "html", null, true);
        yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Mes rendez-vous</a>
            <div class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">
                ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
        yield "
            </div>
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Déconnexion</a>
        </div>
    </div>
</div>

<!-- Bouton pour ouvrir le dropdown gestion -->
<div class=\"relative ml-4\">
    <button class=\"text-black hover:text-gray-700 focus:outline-none\" id=\"gestion-menu-toggle\">
        Gestion <i class=\"fas fa-caret-down\"></i>
    </button>

    <!-- Dropdown menu gestion -->
    <div class=\"absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 hidden\" id=\"gestion-menu\">
        <div class=\"py-1\" role=\"none\">
            <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_appointment_all");
        yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Mes prochains rendez-vous avec les patients</a>
            <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planing_new");
        yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Créer un planning</a>
            <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_planing_index");
        yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Mes plannings</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var userMenuToggle = document.getElementById('user-menu-toggle');
        var userMenu = document.getElementById('user-menu');
        var gestionMenuToggle = document.getElementById('gestion-menu-toggle');
        var gestionMenu = document.getElementById('gestion-menu');

        // Fonction pour fermer tous les menus
        function closeAllMenus() {
            userMenu.classList.add('hidden');
            gestionMenu.classList.add('hidden');
        }

        // Fonction pour fermer les menus lorsqu'on clique en dehors d'eux
        document.addEventListener('click', function(event) {
            var isClickInsideUserMenu = userMenu.contains(event.target);
            var isClickInsideGestionMenu = gestionMenu.contains(event.target);
            var isClickOnUserMenuToggle = userMenuToggle.contains(event.target);
            var isClickOnGestionMenuToggle = gestionMenuToggle.contains(event.target);
            
            if (!isClickInsideUserMenu && !isClickOnUserMenuToggle) {
                userMenu.classList.add('hidden');
            }
            
            if (!isClickInsideGestionMenu && !isClickOnGestionMenuToggle) {
                gestionMenu.classList.add('hidden');
            }
        });

        // Fermer les menus lorsqu'on appuie sur la touche Échap
        document.addEventListener('keydown', function(event) {
            if (event.key === \"Escape\") {
                closeAllMenus();
            }
        });

        // Gestion de l'ouverture et de la fermeture des menus
        userMenuToggle.addEventListener('click', function() {
            userMenu.classList.toggle('hidden');
            gestionMenu.classList.add('hidden');
        });

        gestionMenuToggle.addEventListener('click', function() {
            gestionMenu.classList.toggle('hidden');
            userMenu.classList.add('hidden');
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
        return "shared/menuuser.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  97 => 31,  93 => 30,  89 => 29,  72 => 15,  67 => 13,  62 => 11,  58 => 10,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"relative\">
    <!-- Bouton pour ouvrir le dropdown utilisateur -->
    <button class=\"text-black hover:text-gray-700 focus:outline-none\" id=\"user-menu-toggle\">
        <i class=\"fas fa-user mr-2\"></i> {{ app.user.firstName }} <i class=\"fas fa-caret-down\"></i>
    </button>

    <!-- Dropdown menu utilisateur -->
    <div class=\"absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 hidden\" id=\"user-menu\">
        <div class=\"py-1\" role=\"none\">
            <a href=\"{{ path(\"app_user_edit\", {'id': app.user.id}) }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Modifier mon profil</a>
            <a href=\"{{ path(\"app_appointment_index\", {'id': app.user.id}) }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Mes rendez-vous</a>
            <div class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">
                {{ include('user/_delete_form.html.twig') }}
            </div>
            <a href=\"{{ path(\"app_logout\") }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Déconnexion</a>
        </div>
    </div>
</div>

<!-- Bouton pour ouvrir le dropdown gestion -->
<div class=\"relative ml-4\">
    <button class=\"text-black hover:text-gray-700 focus:outline-none\" id=\"gestion-menu-toggle\">
        Gestion <i class=\"fas fa-caret-down\"></i>
    </button>

    <!-- Dropdown menu gestion -->
    <div class=\"absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 hidden\" id=\"gestion-menu\">
        <div class=\"py-1\" role=\"none\">
            <a href=\"{{ path(\"app_appointment_all\") }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Mes prochains rendez-vous avec les patients</a>
            <a href=\"{{ path(\"app_planing_new\") }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Créer un planning</a>
            <a href=\"{{ path(\"app_planing_index\") }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\" role=\"menuitem\">Mes plannings</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var userMenuToggle = document.getElementById('user-menu-toggle');
        var userMenu = document.getElementById('user-menu');
        var gestionMenuToggle = document.getElementById('gestion-menu-toggle');
        var gestionMenu = document.getElementById('gestion-menu');

        // Fonction pour fermer tous les menus
        function closeAllMenus() {
            userMenu.classList.add('hidden');
            gestionMenu.classList.add('hidden');
        }

        // Fonction pour fermer les menus lorsqu'on clique en dehors d'eux
        document.addEventListener('click', function(event) {
            var isClickInsideUserMenu = userMenu.contains(event.target);
            var isClickInsideGestionMenu = gestionMenu.contains(event.target);
            var isClickOnUserMenuToggle = userMenuToggle.contains(event.target);
            var isClickOnGestionMenuToggle = gestionMenuToggle.contains(event.target);
            
            if (!isClickInsideUserMenu && !isClickOnUserMenuToggle) {
                userMenu.classList.add('hidden');
            }
            
            if (!isClickInsideGestionMenu && !isClickOnGestionMenuToggle) {
                gestionMenu.classList.add('hidden');
            }
        });

        // Fermer les menus lorsqu'on appuie sur la touche Échap
        document.addEventListener('keydown', function(event) {
            if (event.key === \"Escape\") {
                closeAllMenus();
            }
        });

        // Gestion de l'ouverture et de la fermeture des menus
        userMenuToggle.addEventListener('click', function() {
            userMenu.classList.toggle('hidden');
            gestionMenu.classList.add('hidden');
        });

        gestionMenuToggle.addEventListener('click', function() {
            gestionMenu.classList.toggle('hidden');
            userMenu.classList.add('hidden');
        });
    });
</script>
", "shared/menuuser.html.twig", "/var/www/html/doc-and-go/templates/shared/menuuser.html.twig");
    }
}
