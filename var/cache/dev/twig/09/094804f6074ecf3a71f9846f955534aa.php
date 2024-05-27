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

/* home/cgu.html.twig */
class __TwigTemplate_1f378d2d2f60bdf9458a70b3392066c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/cgu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/cgu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/cgu.html.twig", 1);
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

        yield "Conditions Générales d'Utilisation";
        
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
        <h1 class=\"mb-4\">Conditions Générales d'Utilisation</h1>
        
        <div class=\"row\">
            <div class=\"col-md-10 offset-md-1\">
                <article>
                    <h2>1. Préambule</h2>
                    <p>Les présentes Conditions Générales d'Utilisation (ci-après désignées les \"CGU\") régissent l'utilisation du site web Doc-and-Go.fr (ci-après désigné le \"Site\") édité et exploité par Doc and Go SAS, société immatriculée à Asnières-sur-Seine.</p>
                    
                    <h2>2. Acceptation des CGU</h2>
                    <p>En accédant et en utilisant le Site, l'utilisateur reconnaît avoir lu, compris et accepté sans réserve les présentes CGU. Si l'utilisateur n'accepte pas ces conditions, il est prié de ne pas accéder au Site ni de l'utiliser.</p>
                    
                    <h2>3. Objet du Site</h2>
                    <p>Le Site a pour objet de fournir des informations sur les services proposés par Doc and Go SAS, notamment la prise de rendez-vous médicaux en ligne, la téléconsultation et l'accès à des services de santé numériques.</p>
                    
                    <h2>4. Propriété Intellectuelle</h2>
                    <p>Tous les éléments du Site, y compris mais sans s'y limiter, les textes, les graphiques, les logos, les images, les vidéos, les icônes, les sons, les logiciels, appartiennent exclusivement à Doc and Go SAS ou à ses partenaires et sont protégés par les lois nationales et internationales sur la propriété intellectuelle. Toute reproduction, représentation, modification, publication, transmission, dénaturation, totale ou partielle du Site ou de son contenu, par quelque procédé que ce soit, et sur quelque support que ce soit, est interdite sans l'autorisation expresse de Doc and Go SAS.</p>
                    
                    <h2>5. Utilisation du Site</h2>
                    <p>L'utilisateur s'engage à utiliser le Site de manière licite, conforme aux présentes CGU et à la législation en vigueur. Il s'engage notamment à ne pas perturber le fonctionnement du Site, à ne pas accéder de manière non autorisée aux systèmes informatiques de Doc and Go SAS, et à ne pas diffuser de contenu illicite ou préjudiciable.</p>
                    
                    <h2>6. Création d'un Compte</h2>
                    <p>Pour accéder à certains services proposés par le Site, l'utilisateur doit créer un compte personnel. Lors de la création de ce compte, l'utilisateur s'engage à fournir des informations exactes et à les mettre à jour en cas de modifications. L'utilisateur est seul responsable de la confidentialité de ses identifiants de connexion et de toutes les activités effectuées depuis son compte.</p>
                    
                    <h2>7. Responsabilités</h2>
                    <p>Doc and Go SAS s'efforce de maintenir le Site accessible et fonctionnel, mais ne peut garantir l'absence d'interruptions ou d'erreurs. En aucun cas, Doc and Go SAS ne pourra être tenu responsable des dommages directs ou indirects résultant de l'utilisation ou de l'impossibilité d'utilisation du Site. L'utilisateur reconnaît utiliser le Site et les informations qu'il contient sous sa seule responsabilité.</p>
                    
                    <h2>8. Protection des Données Personnelles</h2>
                    <p>Doc and Go SAS s'engage à protéger la vie privée des utilisateurs conformément à sa Politique de Confidentialité disponible sur le Site. L'utilisateur reconnaît avoir pris connaissance de cette politique et consent au traitement de ses données personnelles dans les conditions qui y sont décrites. Les données collectées sont utilisées pour fournir les services proposés par le Site, gérer les comptes utilisateurs et améliorer les services de Doc and Go SAS.</p>
                    
                    <h2>9. Sécurité</h2>
                    <p>Doc and Go SAS met en œuvre les mesures techniques et organisationnelles appropriées pour garantir la sécurité des données personnelles des utilisateurs contre tout accès, modification, divulgation ou destruction non autorisé. Cependant, Doc and Go SAS ne peut garantir une sécurité absolue des données transmises sur Internet et ne saurait être tenue responsable en cas de défaillance du système de sécurité.</p>
                    
                    <h2>10. Liens Hypertextes</h2>
                    <p>Le Site peut contenir des liens hypertextes vers d'autres sites web qui ne sont pas sous le contrôle de Doc and Go SAS. En cliquant sur ces liens, l'utilisateur quitte le Site. Doc and Go SAS n'assume aucune responsabilité quant au contenu de ces sites tiers et aux éventuels dommages ou pertes pouvant résulter de leur utilisation.</p>
                    
                    <h2>11. Modifications des CGU</h2>
                    <p>Doc and Go SAS se réserve le droit de modifier à tout moment les présentes CGU. Les utilisateurs sont invités à consulter régulièrement cette page pour prendre connaissance des éventuelles modifications. L'utilisation continue du Site après la publication des modifications constitue l'acceptation de ces dernières.</p>
                    
                    <h2>12. Droit Applicable et Juridiction</h2>
                    <p>Les présentes CGU sont soumises au droit français. En cas de litige relatif à leur interprétation ou à leur exécution, les parties s'efforceront de trouver une solution amiable. À défaut, les tribunaux compétents d'Asnières-sur-Seine seront seuls compétents pour régler le litige.</p>
                    
                    <h2>13. Dispositions Diverses</h2>
                    <p>Si une ou plusieurs dispositions des présentes CGU sont tenues pour non valides ou déclarées telles en application d'une loi, d'un règlement ou à la suite d'une décision définitive d'une juridiction compétente, les autres dispositions garderont toute leur force et leur portée.</p>
                    
                    <h2>14. Contact</h2>
                    <p>Pour toute question concernant les présentes CGU, l'utilisateur peut contacter Doc and Go SAS à l'adresse suivante : [adresse e-mail de contact].</p>
                    
                    <p>Les présentes CGU sont rédigées en français. En cas de contradiction entre les versions traduites et la version française, cette dernière prévaudra.</p>
                    
                    <p>Les présentes CGU entrent en vigueur à la date de leur publication sur le Site.</p>
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
        return "home/cgu.html.twig";
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

{% block title %}Conditions Générales d'Utilisation{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Conditions Générales d'Utilisation</h1>
        
        <div class=\"row\">
            <div class=\"col-md-10 offset-md-1\">
                <article>
                    <h2>1. Préambule</h2>
                    <p>Les présentes Conditions Générales d'Utilisation (ci-après désignées les \"CGU\") régissent l'utilisation du site web Doc-and-Go.fr (ci-après désigné le \"Site\") édité et exploité par Doc and Go SAS, société immatriculée à Asnières-sur-Seine.</p>
                    
                    <h2>2. Acceptation des CGU</h2>
                    <p>En accédant et en utilisant le Site, l'utilisateur reconnaît avoir lu, compris et accepté sans réserve les présentes CGU. Si l'utilisateur n'accepte pas ces conditions, il est prié de ne pas accéder au Site ni de l'utiliser.</p>
                    
                    <h2>3. Objet du Site</h2>
                    <p>Le Site a pour objet de fournir des informations sur les services proposés par Doc and Go SAS, notamment la prise de rendez-vous médicaux en ligne, la téléconsultation et l'accès à des services de santé numériques.</p>
                    
                    <h2>4. Propriété Intellectuelle</h2>
                    <p>Tous les éléments du Site, y compris mais sans s'y limiter, les textes, les graphiques, les logos, les images, les vidéos, les icônes, les sons, les logiciels, appartiennent exclusivement à Doc and Go SAS ou à ses partenaires et sont protégés par les lois nationales et internationales sur la propriété intellectuelle. Toute reproduction, représentation, modification, publication, transmission, dénaturation, totale ou partielle du Site ou de son contenu, par quelque procédé que ce soit, et sur quelque support que ce soit, est interdite sans l'autorisation expresse de Doc and Go SAS.</p>
                    
                    <h2>5. Utilisation du Site</h2>
                    <p>L'utilisateur s'engage à utiliser le Site de manière licite, conforme aux présentes CGU et à la législation en vigueur. Il s'engage notamment à ne pas perturber le fonctionnement du Site, à ne pas accéder de manière non autorisée aux systèmes informatiques de Doc and Go SAS, et à ne pas diffuser de contenu illicite ou préjudiciable.</p>
                    
                    <h2>6. Création d'un Compte</h2>
                    <p>Pour accéder à certains services proposés par le Site, l'utilisateur doit créer un compte personnel. Lors de la création de ce compte, l'utilisateur s'engage à fournir des informations exactes et à les mettre à jour en cas de modifications. L'utilisateur est seul responsable de la confidentialité de ses identifiants de connexion et de toutes les activités effectuées depuis son compte.</p>
                    
                    <h2>7. Responsabilités</h2>
                    <p>Doc and Go SAS s'efforce de maintenir le Site accessible et fonctionnel, mais ne peut garantir l'absence d'interruptions ou d'erreurs. En aucun cas, Doc and Go SAS ne pourra être tenu responsable des dommages directs ou indirects résultant de l'utilisation ou de l'impossibilité d'utilisation du Site. L'utilisateur reconnaît utiliser le Site et les informations qu'il contient sous sa seule responsabilité.</p>
                    
                    <h2>8. Protection des Données Personnelles</h2>
                    <p>Doc and Go SAS s'engage à protéger la vie privée des utilisateurs conformément à sa Politique de Confidentialité disponible sur le Site. L'utilisateur reconnaît avoir pris connaissance de cette politique et consent au traitement de ses données personnelles dans les conditions qui y sont décrites. Les données collectées sont utilisées pour fournir les services proposés par le Site, gérer les comptes utilisateurs et améliorer les services de Doc and Go SAS.</p>
                    
                    <h2>9. Sécurité</h2>
                    <p>Doc and Go SAS met en œuvre les mesures techniques et organisationnelles appropriées pour garantir la sécurité des données personnelles des utilisateurs contre tout accès, modification, divulgation ou destruction non autorisé. Cependant, Doc and Go SAS ne peut garantir une sécurité absolue des données transmises sur Internet et ne saurait être tenue responsable en cas de défaillance du système de sécurité.</p>
                    
                    <h2>10. Liens Hypertextes</h2>
                    <p>Le Site peut contenir des liens hypertextes vers d'autres sites web qui ne sont pas sous le contrôle de Doc and Go SAS. En cliquant sur ces liens, l'utilisateur quitte le Site. Doc and Go SAS n'assume aucune responsabilité quant au contenu de ces sites tiers et aux éventuels dommages ou pertes pouvant résulter de leur utilisation.</p>
                    
                    <h2>11. Modifications des CGU</h2>
                    <p>Doc and Go SAS se réserve le droit de modifier à tout moment les présentes CGU. Les utilisateurs sont invités à consulter régulièrement cette page pour prendre connaissance des éventuelles modifications. L'utilisation continue du Site après la publication des modifications constitue l'acceptation de ces dernières.</p>
                    
                    <h2>12. Droit Applicable et Juridiction</h2>
                    <p>Les présentes CGU sont soumises au droit français. En cas de litige relatif à leur interprétation ou à leur exécution, les parties s'efforceront de trouver une solution amiable. À défaut, les tribunaux compétents d'Asnières-sur-Seine seront seuls compétents pour régler le litige.</p>
                    
                    <h2>13. Dispositions Diverses</h2>
                    <p>Si une ou plusieurs dispositions des présentes CGU sont tenues pour non valides ou déclarées telles en application d'une loi, d'un règlement ou à la suite d'une décision définitive d'une juridiction compétente, les autres dispositions garderont toute leur force et leur portée.</p>
                    
                    <h2>14. Contact</h2>
                    <p>Pour toute question concernant les présentes CGU, l'utilisateur peut contacter Doc and Go SAS à l'adresse suivante : [adresse e-mail de contact].</p>
                    
                    <p>Les présentes CGU sont rédigées en français. En cas de contradiction entre les versions traduites et la version française, cette dernière prévaudra.</p>
                    
                    <p>Les présentes CGU entrent en vigueur à la date de leur publication sur le Site.</p>
                </article>
            </div>
        </div>
    </div>
{% endblock %}", "home/cgu.html.twig", "/var/www/html/doc-and-go/templates/home/cgu.html.twig");
    }
}
