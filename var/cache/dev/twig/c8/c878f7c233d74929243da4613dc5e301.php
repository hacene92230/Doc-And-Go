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

/* shared/header.html.twig */
class __TwigTemplate_598c7c44d2e2d147ae7f5d5241f7833d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/header.html.twig"));

        // line 1
        yield "    <style>
        /* Style pour les boutons \"Je suis patient\" et \"Je suis docteur\" */
        .rectangle-button {
            border-radius: 0; /* Pas de coins arrondis */
            padding: 8px 16px; /* Ajustez le rembourrage selon vos préférences */
        }

        /* Style pour l'icône à côté du texte */
        .rectangle-button i {
            margin-right: 8px; /* Ajustez la marge selon vos préférences */
        }
    </style>

    <nav class=\"bg-teal-800 p-4 font-sans shadow-md \">
        <div class=\"container mx-auto flex items-center justify-between\">
            <a class=\"text-xl font-bold flex items-center text-white\" href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
<img src=\"";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"DOC-AND-GO\" class=\"h-1/3 w-1/3 mr-2\">
            </a>

            ";
        // line 20
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            yield "            <!-- Boutons Patients et Docteurs -->
            <div class=\"flex items-center space-x-6\">
                <!-- Bouton Docteur -->
                <div class=\"relative\">
                    <button class=\"rectangle-button bg-white text-gray-800 text-sm font-semibold shadow-md hover:shadow-lg focus:outline-none\" id=\"doctor-menu-toggle\">
                        <i class=\"fas fa-user-md\"></i> Docteur
                    </button>
                    <div class=\"absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 hidden\" id=\"doctor-menu\">
                        <div class=\"py-1\">
                        ";
            // line 30
            yield from             $this->loadTemplate("user/doctorLogin.html.twig", "shared/header.html.twig", 30)->unwrap()->yield($context);
            // line 31
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formule");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Nos formules</a>
                            <a href=\"";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avantage");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Nos avantages</a>
                            <a href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_new");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Nous contacter</a>
                        </div>
                    </div>
                </div>

                <!-- Bouton Patient -->
                <div class=\"relative\">
                    <button class=\"rectangle-button bg-white text-gray-800 text-sm font-semibold shadow-md hover:shadow-lg focus:outline-none\" id=\"patient-menu-toggle\">
                        <i class=\"fas fa-user\"></i> Patient
                    </button>
                    <div class=\"absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 hidden\" id=\"patient-menu\">
                        <div class=\"py-1\">
                            <a href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Nous rejoindre</a>
                            <a href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Accéder à mon compte</a>
                                            <a href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_new");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Contact</a>
                        </div>
                    </div>
                </div>
";
        } else {
            // line 52
            yield from             $this->loadTemplate("shared/menuuser.html.twig", "shared/header.html.twig", 52)->unwrap()->yield($context);
        }
        // line 54
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 55
            yield from             $this->loadTemplate("shared/menuadmin.html.twig", "shared/header.html.twig", 55)->unwrap()->yield($context);
        }
        // line 57
        yield "</div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var doctorMenuToggle = document.getElementById('doctor-menu-toggle');
            var doctorMenu = document.getElementById('doctor-menu');
            var patientMenuToggle = document.getElementById('patient-menu-toggle');
            var patientMenu = document.getElementById('patient-menu');

            // Fonction pour fermer tous les menus
            function closeAllMenus() {
                doctorMenu.classList.add('hidden');
                patientMenu.classList.add('hidden');
            }

            // Fermer les menus lorsqu'on appuie sur la touche Échap
            document.addEventListener('keydown', function(event) {
                if (event.key === \"Escape\") {
                    closeAllMenus();
                }
            });

            // Gestion de l'ouverture et de la fermeture des menus
            doctorMenuToggle.addEventListener('click', function(event) {
                event.stopPropagation();
                doctorMenu.classList.toggle('hidden');
                patientMenu.classList.add('hidden');
            });

            patientMenuToggle.addEventListener('click', function(event) {
                event.stopPropagation();
                patientMenu.classList.toggle('hidden');
                doctorMenu.classList.add('hidden');
            });

            // Fermer les menus lorsqu'on clique en dehors d'eux
            document.addEventListener('click', function(event) {
                if (!doctorMenu.contains(event.target) && !doctorMenuToggle.contains(event.target)) {
                    doctorMenu.classList.add('hidden');
                }

                if (!patientMenu.contains(event.target) && !patientMenuToggle.contains(event.target)) {
                    patientMenu.classList.add('hidden');
                }
            });
        });
    </script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "shared/header.html.twig";
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
        return array (  134 => 57,  131 => 55,  129 => 54,  126 => 52,  118 => 47,  114 => 46,  110 => 45,  95 => 33,  91 => 32,  86 => 31,  84 => 30,  73 => 21,  71 => 20,  65 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <style>
        /* Style pour les boutons \"Je suis patient\" et \"Je suis docteur\" */
        .rectangle-button {
            border-radius: 0; /* Pas de coins arrondis */
            padding: 8px 16px; /* Ajustez le rembourrage selon vos préférences */
        }

        /* Style pour l'icône à côté du texte */
        .rectangle-button i {
            margin-right: 8px; /* Ajustez la marge selon vos préférences */
        }
    </style>

    <nav class=\"bg-teal-800 p-4 font-sans shadow-md \">
        <div class=\"container mx-auto flex items-center justify-between\">
            <a class=\"text-xl font-bold flex items-center text-white\" href=\"{{ path('app_home') }}\">
<img src=\"{{ asset('images/logo.png') }}\" alt=\"DOC-AND-GO\" class=\"h-1/3 w-1/3 mr-2\">
            </a>

            {% if not app.user %}
            <!-- Boutons Patients et Docteurs -->
            <div class=\"flex items-center space-x-6\">
                <!-- Bouton Docteur -->
                <div class=\"relative\">
                    <button class=\"rectangle-button bg-white text-gray-800 text-sm font-semibold shadow-md hover:shadow-lg focus:outline-none\" id=\"doctor-menu-toggle\">
                        <i class=\"fas fa-user-md\"></i> Docteur
                    </button>
                    <div class=\"absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 hidden\" id=\"doctor-menu\">
                        <div class=\"py-1\">
                        {% include(\"user/doctorLogin.html.twig\") %}
                            <a href=\"{{ path('app_formule') }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Nos formules</a>
                            <a href=\"{{ path('app_avantage') }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Nos avantages</a>
                            <a href=\"{{ path('app_contact_new') }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Nous contacter</a>
                        </div>
                    </div>
                </div>

                <!-- Bouton Patient -->
                <div class=\"relative\">
                    <button class=\"rectangle-button bg-white text-gray-800 text-sm font-semibold shadow-md hover:shadow-lg focus:outline-none\" id=\"patient-menu-toggle\">
                        <i class=\"fas fa-user\"></i> Patient
                    </button>
                    <div class=\"absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 hidden\" id=\"patient-menu\">
                        <div class=\"py-1\">
                            <a href=\"{{ path('app_register') }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Nous rejoindre</a>
                            <a href=\"{{ path('app_login') }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Accéder à mon compte</a>
                                            <a href=\"{{ path('app_contact_new') }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Contact</a>
                        </div>
                    </div>
                </div>
{% else %}
{% include(\"shared/menuuser.html.twig\") %}
{% endif %}
{% if is_granted('ROLE_ADMIN') %}
{% include(\"shared/menuadmin.html.twig\") %}
{% endif %}
</div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var doctorMenuToggle = document.getElementById('doctor-menu-toggle');
            var doctorMenu = document.getElementById('doctor-menu');
            var patientMenuToggle = document.getElementById('patient-menu-toggle');
            var patientMenu = document.getElementById('patient-menu');

            // Fonction pour fermer tous les menus
            function closeAllMenus() {
                doctorMenu.classList.add('hidden');
                patientMenu.classList.add('hidden');
            }

            // Fermer les menus lorsqu'on appuie sur la touche Échap
            document.addEventListener('keydown', function(event) {
                if (event.key === \"Escape\") {
                    closeAllMenus();
                }
            });

            // Gestion de l'ouverture et de la fermeture des menus
            doctorMenuToggle.addEventListener('click', function(event) {
                event.stopPropagation();
                doctorMenu.classList.toggle('hidden');
                patientMenu.classList.add('hidden');
            });

            patientMenuToggle.addEventListener('click', function(event) {
                event.stopPropagation();
                patientMenu.classList.toggle('hidden');
                doctorMenu.classList.add('hidden');
            });

            // Fermer les menus lorsqu'on clique en dehors d'eux
            document.addEventListener('click', function(event) {
                if (!doctorMenu.contains(event.target) && !doctorMenuToggle.contains(event.target)) {
                    doctorMenu.classList.add('hidden');
                }

                if (!patientMenu.contains(event.target) && !patientMenuToggle.contains(event.target)) {
                    patientMenu.classList.add('hidden');
                }
            });
        });
    </script>", "shared/header.html.twig", "/var/www/html/doc-and-go/templates/shared/header.html.twig");
    }
}
