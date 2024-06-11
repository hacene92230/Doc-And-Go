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

/* home/formule.html.twig */
class __TwigTemplate_69f513ccf50416421d82da6c5063338f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/formule.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/formule.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/formule.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " Nos formules ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mx-auto px-4 py-8\">
    <h1 class=\" text-5xl font-bold mb-4 ml-5\" id=\"abonnement_titre\">Nos Formules d'Abonnement</h1>
    
    <div class=\"ml-5\">
        <!-- Abonnement Annuel -->

        <style>
\t#abonnement_titre{
\tcolor: #115e59;
\t}
        .button-container {
            position: relative;
            display: inline-flex;
            overflow: hidden;
\t    border-radius: 20px;
\t    width: -webkit-fill-available;
        }
        .slider {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 50%;
            background-color: #ffffff36;
            transition: transform 0.3s ease-in-out;
\t\tz-index:2;
        }
        .button {
            position: relative;
            z-index: 1;
            flex: 1;
      \t    color:white;
\t    padding: 0.5rem 1rem;
    \t    background-color: #115e59;
            border: none;
    \t    cursor: pointer;
}
        }
    </style>
    <div class=\"mx-auto\">
        <div class=\"button-container\">
            <div id=\"slider\" class=\"slider\"></div>
            <button id=\"button1\" class=\"button\" onclick=\"showDiv('div1', 'button1')\">Annuel</button>
            <button id=\"button2\" class=\"button\" onclick=\"showDiv('div2', 'button2')\">Mensuel</button>
        </div>
        <div id=\"div1\" class=\"content mt-4\">

            <div class=\"border border-black bg-white rounded-lg\" box-shadow: -16px -14px 0px #B0CCCB; border-radius: 16px;\">
\t\t<div style=\"background-color:#115e59;text-align: center; padding-bottom: 2px; padding-top: 16px; border-radius: 7px\">
\t        \t<h3 class=\" text-3xl font-bold mb-4\" style=\"color:white;\">Abonnement annuel</h3>
\t\t\t<br>
\t\t\t<h3 class=\" text-3xl font-bold mb-4\" style=\"color:white;\">550 euros/an</h3>
\t\t</div>

\t\t<div style=\"display: flex; justify-content: space-evenly;\">
\t\t<div>
                <h4 class=\" text-2xl font-bold mb-4 ml-4 mt-4\" id=\"abonnement_titre\">Logiciel de facturation et communication avec les patients</h4>
\t\t<ul class=\"list-disc pl-6 mb-4 list-none\">
                <li><i class=\"fa-solid fa-splotch mr-4\" style=\"color: #115e59;\"></i>Gestion des facturations</li>
                <li><i class=\"fa-solid fa-splotch mr-4\" style=\"color: #115e59;\"></i>Système de prise de rendez-vous fiable et performant</li>
                <li><i class=\"fa-solid fa-splotch mr-4\" style=\"color: #115e59;\"></i>Possibilité de téléconsultation</li>
                <li><i class=\"fa-solid fa-splotch mr-4\" style=\"color: #115e59;\"></i>Accès à une base de données de médicaments et de traitements</li>
                <li><i class=\"fa-solid fa-splotch mr-4\" style=\"color: #115e59;\"></i>Système de rappels automatiques pour les patients</li>
        \t</ul>
\t\t</div>
\t<div>
\t       \t<h4 class=\" text-2xl font-bold mb-4 ml-4 mt-4\" id=\"abonnement_titre\">Avantages</h4>
\t\t<ul class=\"list-disc pl-6 mb-4 list-none\">
\t\t<li><i class=\"fa-solid fa-check mr-4\" style=\"color: #115e59;\"></i>Prise de RDV facile et rapide</li>
\t\t<li><i class=\"fa-solid fa-check mr-4\" style=\"color: #115e59;\"></i>Acc&egraves et gestion des informations m&eacutedicales</li>
\t\t<li><i class=\"fa-solid fa-check mr-4\" style=\"color: #115e59;\"></i>Communication et suivi personnalis&eacutes</li>
\t\t<li><i class=\"fa-solid fa-check mr-4\" style=\"color: #115e59;\"></i>Notifications et rappels automatis&eacutes</li>
\t\t<li><i class=\"fa-solid fa-check mr-4\" style=\"color: #115e59;\"></i>Exp&eacuterience utilisateur optimis&eacutee</li>
\t\t</ul>
\t       \t<h4 class=\" text-2xl font-bold mb-4 ml-4 mt-4\" id=\"abonnement_titre\">Moyens de paiement acceptés</h4>
\t\t<ul class=\"list-disc pl-6 mb-4 list-none flex\">
\t\t<li><i class=\"fa-solid fa-credit-card mr-4\" style=\"font-size: 2em;\"></i></li>
\t\t<li><i class=\"fa-solid fa-money-bill mr-4\" style=\"font-size: 2em;\"></i></li>
\t\t<li><i class=\"fa-sharp fa-solid fa-money-check mr-4\" style=\"font-size: 2em;\"></i></li>
\t\t</ul>
\t</div>
\t</div>
        </div>
\t</div>
        </div>
        <div id=\"div2\" class=\"content hidden mt-4\">
            <h2 class=\"text-2xl\">Contenu de la Div 2</h2>
            <p class=\"mt-2\">Ceci est la deuxi�me div.</p>
        </div>
    </div>
    <script>
        function showDiv(divId, buttonId) {
            // Hide all content divs
            document.querySelectorAll('.content').forEach(div => {
                div.classList.add('hidden');
            });

            // Show the selected content div
            document.getElementById(divId).classList.remove('hidden');

            // Get the slider element
            const slider = document.getElementById('slider');

            // Move the slider
            if (buttonId === 'button1') {
                slider.style.transform = 'translateX(0%)';
            } else {
                slider.style.transform = 'translateX(100%)';
            }
        }
    </script>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/formule.html.twig";
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
        return array (  92 => 6,  82 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        {% extends 'base.html.twig' %}

{% block title %} Nos formules {{ parent() }} {% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <h1 class=\" text-5xl font-bold mb-4 ml-5\" id=\"abonnement_titre\">Nos Formules d'Abonnement</h1>
    
    <div class=\"ml-5\">
        <!-- Abonnement Annuel -->

        <style>
\t#abonnement_titre{
\tcolor: #115e59;
\t}
        .button-container {
            position: relative;
            display: inline-flex;
            overflow: hidden;
\t    border-radius: 20px;
\t    width: -webkit-fill-available;
        }
        .slider {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 50%;
            background-color: #ffffff36;
            transition: transform 0.3s ease-in-out;
\t\tz-index:2;
        }
        .button {
            position: relative;
            z-index: 1;
            flex: 1;
      \t    color:white;
\t    padding: 0.5rem 1rem;
    \t    background-color: #115e59;
            border: none;
    \t    cursor: pointer;
}
        }
    </style>
    <div class=\"mx-auto\">
        <div class=\"button-container\">
            <div id=\"slider\" class=\"slider\"></div>
            <button id=\"button1\" class=\"button\" onclick=\"showDiv('div1', 'button1')\">Annuel</button>
            <button id=\"button2\" class=\"button\" onclick=\"showDiv('div2', 'button2')\">Mensuel</button>
        </div>
        <div id=\"div1\" class=\"content mt-4\">

            <div class=\"border border-black bg-white rounded-lg\" box-shadow: -16px -14px 0px #B0CCCB; border-radius: 16px;\">
\t\t<div style=\"background-color:#115e59;text-align: center; padding-bottom: 2px; padding-top: 16px; border-radius: 7px\">
\t        \t<h3 class=\" text-3xl font-bold mb-4\" style=\"color:white;\">Abonnement annuel</h3>
\t\t\t<br>
\t\t\t<h3 class=\" text-3xl font-bold mb-4\" style=\"color:white;\">550 euros/an</h3>
\t\t</div>

\t\t<div style=\"display: flex; justify-content: space-evenly;\">
\t\t<div>
                <h4 class=\" text-2xl font-bold mb-4 ml-4 mt-4\" id=\"abonnement_titre\">Logiciel de facturation et communication avec les patients</h4>
\t\t<ul class=\"list-disc pl-6 mb-4 list-none\">
                <li><i class=\"fa-solid fa-splotch mr-4\" style=\"color: #115e59;\"></i>Gestion des facturations</li>
                <li><i class=\"fa-solid fa-splotch mr-4\" style=\"color: #115e59;\"></i>Système de prise de rendez-vous fiable et performant</li>
                <li><i class=\"fa-solid fa-splotch mr-4\" style=\"color: #115e59;\"></i>Possibilité de téléconsultation</li>
                <li><i class=\"fa-solid fa-splotch mr-4\" style=\"color: #115e59;\"></i>Accès à une base de données de médicaments et de traitements</li>
                <li><i class=\"fa-solid fa-splotch mr-4\" style=\"color: #115e59;\"></i>Système de rappels automatiques pour les patients</li>
        \t</ul>
\t\t</div>
\t<div>
\t       \t<h4 class=\" text-2xl font-bold mb-4 ml-4 mt-4\" id=\"abonnement_titre\">Avantages</h4>
\t\t<ul class=\"list-disc pl-6 mb-4 list-none\">
\t\t<li><i class=\"fa-solid fa-check mr-4\" style=\"color: #115e59;\"></i>Prise de RDV facile et rapide</li>
\t\t<li><i class=\"fa-solid fa-check mr-4\" style=\"color: #115e59;\"></i>Acc&egraves et gestion des informations m&eacutedicales</li>
\t\t<li><i class=\"fa-solid fa-check mr-4\" style=\"color: #115e59;\"></i>Communication et suivi personnalis&eacutes</li>
\t\t<li><i class=\"fa-solid fa-check mr-4\" style=\"color: #115e59;\"></i>Notifications et rappels automatis&eacutes</li>
\t\t<li><i class=\"fa-solid fa-check mr-4\" style=\"color: #115e59;\"></i>Exp&eacuterience utilisateur optimis&eacutee</li>
\t\t</ul>
\t       \t<h4 class=\" text-2xl font-bold mb-4 ml-4 mt-4\" id=\"abonnement_titre\">Moyens de paiement acceptés</h4>
\t\t<ul class=\"list-disc pl-6 mb-4 list-none flex\">
\t\t<li><i class=\"fa-solid fa-credit-card mr-4\" style=\"font-size: 2em;\"></i></li>
\t\t<li><i class=\"fa-solid fa-money-bill mr-4\" style=\"font-size: 2em;\"></i></li>
\t\t<li><i class=\"fa-sharp fa-solid fa-money-check mr-4\" style=\"font-size: 2em;\"></i></li>
\t\t</ul>
\t</div>
\t</div>
        </div>
\t</div>
        </div>
        <div id=\"div2\" class=\"content hidden mt-4\">
            <h2 class=\"text-2xl\">Contenu de la Div 2</h2>
            <p class=\"mt-2\">Ceci est la deuxi�me div.</p>
        </div>
    </div>
    <script>
        function showDiv(divId, buttonId) {
            // Hide all content divs
            document.querySelectorAll('.content').forEach(div => {
                div.classList.add('hidden');
            });

            // Show the selected content div
            document.getElementById(divId).classList.remove('hidden');

            // Get the slider element
            const slider = document.getElementById('slider');

            // Move the slider
            if (buttonId === 'button1') {
                slider.style.transform = 'translateX(0%)';
            } else {
                slider.style.transform = 'translateX(100%)';
            }
        }
    </script>
    </div>

</div>
{% endblock %}
", "home/formule.html.twig", "/var/www/html/doc-and-go/templates/home/formule.html.twig");
    }
}
