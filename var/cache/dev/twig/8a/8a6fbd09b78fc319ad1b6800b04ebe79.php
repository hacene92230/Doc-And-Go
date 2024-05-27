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
    <h1 class=\"text-3xl font-bold mb-4\">Nos Formules d'Abonnement</h1>
    
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <!-- Abonnement Annuel -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4 flex items-center\"><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-badge-check\"></span> Abonnement Annuel</h2>
            <p class=\"text-gray-700 mb-4\">Pour seulement <span class=\"text-green-500 font-bold\">550 euros par an</span>, bénéficiez de :</p>
            <ul class=\"list-disc pl-6 mb-4\">
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bi:receipt-cutoff\"></span> Gestion des facturations</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-calendar-event\"></span> Système de prise de rendez-vous fiable et performant</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"icon-park-outline:video-medical\"></span> Possibilité de téléconsultation</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ri:database-2-fill\"></span> Stockage sécurisé des données médicales</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-calendar\"></span> Calendrier de disponibilité en ligne</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fa-solid:headset\"></span> Support client prioritaire</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ri:file-list-fill\"></span> Intégration avec les systèmes de gestion existants</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"twemoji:scroll\"></span> Accès à une base de données de médicaments et de traitements</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"iconoir:alarm-1\"></span> Système de rappels automatiques pour les patients</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bi:box\"></span> Fonctionnalité de gestion des stocks pour les fournitures médicales</li>
            </ul>
            <p class=\"text-gray-700 mb-4\">Moyens de paiement acceptés :</p>
            <ul class=\"flex\">
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:visa\"></span></li>
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:mastercard\"></span></li>
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:paypal\"></span></li>
            </ul>
            <p class=\"mt-6 text-gray-600\">* Fonctionnalités additionnelles disponibles</p>
        </div>

        <!-- Abonnement Mensuel -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4 flex items-center\"><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-time-five\"></span> Abonnement Mensuel (Sans Engagement)</h2>
            <p class=\"text-gray-700 mb-4\">Pour seulement <span class=\"text-green-500 font-bold\">60 euros par mois</span>, bénéficiez de :</p>
            <ul class=\"list-disc pl-6 mb-4\">
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"icon-park-outline:prescription\"></span> Gestion des facturations</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:sharp-event\"></span> Système de prise de rendez-vous fiable et performant</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"mdi:video-plus\"></span> Possibilité de téléconsultation</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"grommet-icons:document-lock\"></span> Stockage sécurisé des données médicales</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-calendar-check\"></span> Calendrier de disponibilité en ligne</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"emojione-monotone:headphone-loud\"></span> Support client standard</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ci:api\"></span> Notifications automatiques</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-folder-open\"></span> Module de gestion des dossiers médicaux électroniques (DME)</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"twemoji:lab-coat\"></span> Intégration avec des services de laboratoire pour l'envoi et la réception des résultats d'analyses</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ph:prescription-bottle\"></span> Fonctionnalité de prescription électronique</li>
            </ul>
            <p class=\"text-gray-700 mb-4\">Moyens de paiement acceptés :</p>
            <ul class=\"flex\">
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:visa\"></span></li>
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:mastercard\"></span></li>
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:paypal\"></span></li>
            </ul>
            <p class=\"mt-6 text-gray-600\">* Sans engagement, vous pouvez annuler à tout moment.</p>
        </div>
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
    <h1 class=\"text-3xl font-bold mb-4\">Nos Formules d'Abonnement</h1>
    
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <!-- Abonnement Annuel -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4 flex items-center\"><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-badge-check\"></span> Abonnement Annuel</h2>
            <p class=\"text-gray-700 mb-4\">Pour seulement <span class=\"text-green-500 font-bold\">550 euros par an</span>, bénéficiez de :</p>
            <ul class=\"list-disc pl-6 mb-4\">
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bi:receipt-cutoff\"></span> Gestion des facturations</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-calendar-event\"></span> Système de prise de rendez-vous fiable et performant</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"icon-park-outline:video-medical\"></span> Possibilité de téléconsultation</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ri:database-2-fill\"></span> Stockage sécurisé des données médicales</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-calendar\"></span> Calendrier de disponibilité en ligne</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"fa-solid:headset\"></span> Support client prioritaire</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ri:file-list-fill\"></span> Intégration avec les systèmes de gestion existants</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"twemoji:scroll\"></span> Accès à une base de données de médicaments et de traitements</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"iconoir:alarm-1\"></span> Système de rappels automatiques pour les patients</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bi:box\"></span> Fonctionnalité de gestion des stocks pour les fournitures médicales</li>
            </ul>
            <p class=\"text-gray-700 mb-4\">Moyens de paiement acceptés :</p>
            <ul class=\"flex\">
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:visa\"></span></li>
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:mastercard\"></span></li>
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:paypal\"></span></li>
            </ul>
            <p class=\"mt-6 text-gray-600\">* Fonctionnalités additionnelles disponibles</p>
        </div>

        <!-- Abonnement Mensuel -->
        <div class=\"bg-gray-100 p-6 rounded-lg\">
            <h2 class=\"text-xl font-bold mb-4 flex items-center\"><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-time-five\"></span> Abonnement Mensuel (Sans Engagement)</h2>
            <p class=\"text-gray-700 mb-4\">Pour seulement <span class=\"text-green-500 font-bold\">60 euros par mois</span>, bénéficiez de :</p>
            <ul class=\"list-disc pl-6 mb-4\">
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"icon-park-outline:prescription\"></span> Gestion des facturations</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ic:sharp-event\"></span> Système de prise de rendez-vous fiable et performant</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"mdi:video-plus\"></span> Possibilité de téléconsultation</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"grommet-icons:document-lock\"></span> Stockage sécurisé des données médicales</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-calendar-check\"></span> Calendrier de disponibilité en ligne</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"emojione-monotone:headphone-loud\"></span> Support client standard</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ci:api\"></span> Notifications automatiques</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"bx:bxs-folder-open\"></span> Module de gestion des dossiers médicaux électroniques (DME)</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"twemoji:lab-coat\"></span> Intégration avec des services de laboratoire pour l'envoi et la réception des résultats d'analyses</li>
                <li><span class=\"iconify text-green-500 mr-2\" data-icon=\"ph:prescription-bottle\"></span> Fonctionnalité de prescription électronique</li>
            </ul>
            <p class=\"text-gray-700 mb-4\">Moyens de paiement acceptés :</p>
            <ul class=\"flex\">
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:visa\"></span></li>
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:mastercard\"></span></li>
                <li class=\"mr-4\"><span class=\"iconify text-green-500 text-2xl\" data-icon=\"simple-icons:paypal\"></span></li>
            </ul>
            <p class=\"mt-6 text-gray-600\">* Sans engagement, vous pouvez annuler à tout moment.</p>
        </div>
    </div>
</div>
{% endblock %}
", "home/formule.html.twig", "/var/www/html/doc-and-go/templates/home/formule.html.twig");
    }
}
