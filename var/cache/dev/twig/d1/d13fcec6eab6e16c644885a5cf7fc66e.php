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

/* home/politique.html.twig */
class __TwigTemplate_9cbc3480871fbfd9801b555bcac002fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/politique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/politique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/politique.html.twig", 1);
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

        yield "Politique de Confidentialité";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Politique de Confidentialité</h1>
        
        <div class=\"row\">
            <div class=\"col-md-10 offset-md-1\">
                <article>
                    <h2>1. Introduction</h2>
                    <p>Doc and Go SAS, basé à Asnières-sur-Seine, est engagé à protéger la confidentialité et la sécurité des informations personnelles de ses utilisateurs. Cette Politique de Confidentialité explique comment nous collectons, utilisons, partageons et protégeons vos informations personnelles lorsque vous utilisez notre site web, Doc-and-Go.fr (ci-après désigné le \"Site\").</p>
                    
                    <h2>2. Collecte des Informations</h2>
                    <p>Nous collectons différentes catégories d'informations personnelles lorsque vous utilisez notre Site :</p>
                    <ul>
                        <li><strong>Informations de contact :</strong> telles que votre nom, adresse e-mail, numéro de téléphone, adresse postale.</li>
                        <li><strong>Informations de compte :</strong> telles que votre nom d'utilisateur et mot de passe.</li>
                        <li><strong>Informations de santé :</strong> telles que votre historique médical, vos prescriptions, et d'autres informations que vous choisissez de partager avec nous.</li>
                        <li><strong>Informations techniques :</strong> telles que votre adresse IP, type de navigateur, et données de navigation.</li>
                    </ul>
                    
                    <h2>3. Utilisation des Informations</h2>
                    <p>Les informations personnelles que nous collectons peuvent être utilisées pour :</p>
                    <ul>
                        <li>Fournir et améliorer nos services, y compris la prise de rendez-vous médicaux et la téléconsultation.</li>
                        <li>Communiquer avec vous concernant vos rendez-vous et autres services.</li>
                        <li>Personnaliser votre expérience sur notre Site.</li>
                        <li>Assurer la sécurité de notre Site et prévenir les fraudes.</li>
                        <li>Respecter nos obligations légales et réglementaires.</li>
                    </ul>
                    
                    <h2>4. Partage des Informations</h2>
                    <p>Nous ne partageons pas vos informations personnelles avec des tiers, sauf dans les cas suivants :</p>
                    <ul>
                        <li>Avec votre consentement explicite.</li>
                        <li>Avec les professionnels de santé pour faciliter votre prise en charge.</li>
                        <li>Avec des prestataires de services qui nous aident à fournir nos services, sous réserve qu'ils respectent des obligations strictes de confidentialité.</li>
                        <li>Pour se conformer à la loi ou répondre à des demandes légales.</li>
                    </ul>
                    
                    <h2>5. Protection des Informations</h2>
                    <p>Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos informations personnelles contre tout accès, utilisation, divulgation, modification ou destruction non autorisés. Cependant, aucune méthode de transmission sur Internet ou de stockage électronique n'est complètement sécurisée, et nous ne pouvons garantir une sécurité absolue.</p>
                    
                    <h2>6. Vos Droits</h2>
                    <p>En vertu de la législation applicable, vous disposez de plusieurs droits concernant vos informations personnelles :</p>
                    <ul>
                        <li><strong>Droit d'accès :</strong> Vous pouvez demander une copie des informations personnelles que nous détenons à votre sujet.</li>
                        <li><strong>Droit de rectification :</strong> Vous pouvez demander la correction des informations inexactes ou incomplètes.</li>
                        <li><strong>Droit de suppression :</strong> Vous pouvez demander la suppression de vos informations personnelles, sous certaines conditions.</li>
                        <li><strong>Droit de limitation :</strong> Vous pouvez demander de limiter le traitement de vos informations personnelles dans certains cas.</li>
                        <li><strong>Droit d'opposition :</strong> Vous pouvez vous opposer au traitement de vos informations personnelles pour des raisons légitimes.</li>
                        <li><strong>Droit à la portabilité :</strong> Vous pouvez demander à recevoir vos informations personnelles dans un format structuré, couramment utilisé et lisible par machine.</li>
                    </ul>
                    
                    <h2>7. Conservation des Informations</h2>
                    <p>Nous conservons vos informations personnelles aussi longtemps que nécessaire pour fournir nos services, respecter nos obligations légales, résoudre les litiges et faire respecter nos accords. Les critères de détermination des durées de conservation incluent la durée de notre relation avec vous et les exigences légales.</p>
                    
                    <h2>8. Cookies et Technologies Similaires</h2>
                    <p>Nous utilisons des cookies et des technologies similaires pour améliorer votre expérience sur notre Site, analyser l'utilisation du Site et à des fins de marketing. Vous pouvez gérer vos préférences en matière de cookies à tout moment via les paramètres de votre navigateur.</p>
                    
                    <h2>9. Modifications de la Politique de Confidentialité</h2>
                    <p>Nous nous réservons le droit de modifier cette Politique de Confidentialité à tout moment. Nous vous informerons de toute modification substantielle en publiant la nouvelle Politique de Confidentialité sur notre Site. Nous vous encourageons à consulter régulièrement cette page pour prendre connaissance des éventuelles modifications.</p>
                    
                    <h2>10. Contact</h2>
                    <p>Pour toute question ou demande concernant cette Politique de Confidentialité, vous pouvez nous contacter à l'adresse suivante : [adresse e-mail de contact].</p>
                    
                    <p>Cette Politique de Confidentialité est rédigée en français. En cas de contradiction entre les versions traduites et la version française, cette dernière prévaudra.</p>
                    
                    <p>Cette Politique de Confidentialité entre en vigueur à la date de sa publication sur le Site.</p>
                </article>
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
        return "home/politique.html.twig";
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
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Politique de Confidentialité{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Politique de Confidentialité</h1>
        
        <div class=\"row\">
            <div class=\"col-md-10 offset-md-1\">
                <article>
                    <h2>1. Introduction</h2>
                    <p>Doc and Go SAS, basé à Asnières-sur-Seine, est engagé à protéger la confidentialité et la sécurité des informations personnelles de ses utilisateurs. Cette Politique de Confidentialité explique comment nous collectons, utilisons, partageons et protégeons vos informations personnelles lorsque vous utilisez notre site web, Doc-and-Go.fr (ci-après désigné le \"Site\").</p>
                    
                    <h2>2. Collecte des Informations</h2>
                    <p>Nous collectons différentes catégories d'informations personnelles lorsque vous utilisez notre Site :</p>
                    <ul>
                        <li><strong>Informations de contact :</strong> telles que votre nom, adresse e-mail, numéro de téléphone, adresse postale.</li>
                        <li><strong>Informations de compte :</strong> telles que votre nom d'utilisateur et mot de passe.</li>
                        <li><strong>Informations de santé :</strong> telles que votre historique médical, vos prescriptions, et d'autres informations que vous choisissez de partager avec nous.</li>
                        <li><strong>Informations techniques :</strong> telles que votre adresse IP, type de navigateur, et données de navigation.</li>
                    </ul>
                    
                    <h2>3. Utilisation des Informations</h2>
                    <p>Les informations personnelles que nous collectons peuvent être utilisées pour :</p>
                    <ul>
                        <li>Fournir et améliorer nos services, y compris la prise de rendez-vous médicaux et la téléconsultation.</li>
                        <li>Communiquer avec vous concernant vos rendez-vous et autres services.</li>
                        <li>Personnaliser votre expérience sur notre Site.</li>
                        <li>Assurer la sécurité de notre Site et prévenir les fraudes.</li>
                        <li>Respecter nos obligations légales et réglementaires.</li>
                    </ul>
                    
                    <h2>4. Partage des Informations</h2>
                    <p>Nous ne partageons pas vos informations personnelles avec des tiers, sauf dans les cas suivants :</p>
                    <ul>
                        <li>Avec votre consentement explicite.</li>
                        <li>Avec les professionnels de santé pour faciliter votre prise en charge.</li>
                        <li>Avec des prestataires de services qui nous aident à fournir nos services, sous réserve qu'ils respectent des obligations strictes de confidentialité.</li>
                        <li>Pour se conformer à la loi ou répondre à des demandes légales.</li>
                    </ul>
                    
                    <h2>5. Protection des Informations</h2>
                    <p>Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos informations personnelles contre tout accès, utilisation, divulgation, modification ou destruction non autorisés. Cependant, aucune méthode de transmission sur Internet ou de stockage électronique n'est complètement sécurisée, et nous ne pouvons garantir une sécurité absolue.</p>
                    
                    <h2>6. Vos Droits</h2>
                    <p>En vertu de la législation applicable, vous disposez de plusieurs droits concernant vos informations personnelles :</p>
                    <ul>
                        <li><strong>Droit d'accès :</strong> Vous pouvez demander une copie des informations personnelles que nous détenons à votre sujet.</li>
                        <li><strong>Droit de rectification :</strong> Vous pouvez demander la correction des informations inexactes ou incomplètes.</li>
                        <li><strong>Droit de suppression :</strong> Vous pouvez demander la suppression de vos informations personnelles, sous certaines conditions.</li>
                        <li><strong>Droit de limitation :</strong> Vous pouvez demander de limiter le traitement de vos informations personnelles dans certains cas.</li>
                        <li><strong>Droit d'opposition :</strong> Vous pouvez vous opposer au traitement de vos informations personnelles pour des raisons légitimes.</li>
                        <li><strong>Droit à la portabilité :</strong> Vous pouvez demander à recevoir vos informations personnelles dans un format structuré, couramment utilisé et lisible par machine.</li>
                    </ul>
                    
                    <h2>7. Conservation des Informations</h2>
                    <p>Nous conservons vos informations personnelles aussi longtemps que nécessaire pour fournir nos services, respecter nos obligations légales, résoudre les litiges et faire respecter nos accords. Les critères de détermination des durées de conservation incluent la durée de notre relation avec vous et les exigences légales.</p>
                    
                    <h2>8. Cookies et Technologies Similaires</h2>
                    <p>Nous utilisons des cookies et des technologies similaires pour améliorer votre expérience sur notre Site, analyser l'utilisation du Site et à des fins de marketing. Vous pouvez gérer vos préférences en matière de cookies à tout moment via les paramètres de votre navigateur.</p>
                    
                    <h2>9. Modifications de la Politique de Confidentialité</h2>
                    <p>Nous nous réservons le droit de modifier cette Politique de Confidentialité à tout moment. Nous vous informerons de toute modification substantielle en publiant la nouvelle Politique de Confidentialité sur notre Site. Nous vous encourageons à consulter régulièrement cette page pour prendre connaissance des éventuelles modifications.</p>
                    
                    <h2>10. Contact</h2>
                    <p>Pour toute question ou demande concernant cette Politique de Confidentialité, vous pouvez nous contacter à l'adresse suivante : [adresse e-mail de contact].</p>
                    
                    <p>Cette Politique de Confidentialité est rédigée en français. En cas de contradiction entre les versions traduites et la version française, cette dernière prévaudra.</p>
                    
                    <p>Cette Politique de Confidentialité entre en vigueur à la date de sa publication sur le Site.</p>
                </article>
            </div>
        </div>
    </div>
{% endblock %}", "home/politique.html.twig", "/var/www/html/doc-and-go/templates/home/politique.html.twig");
    }
}
