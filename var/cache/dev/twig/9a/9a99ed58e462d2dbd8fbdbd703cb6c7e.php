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

/* user/_form.html.twig */
class __TwigTemplate_4c926bdd7fe406dd73945d20484adbfb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        yield "<div class=\"container mx-auto \">
    
        ";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        yield "
<div class=\" bg-vert pt-4 pb-4  mx-12 rounded mt-3 \">
        <!-- Colonne 1 (à gauche) -->
<div class=\"shrink-0 sm:grid grid-cols-2 gap-3 \">
        <div class=\" mx-6 sm:col md:col lg:col sm:ml-24 text-black \">
            <!-- Sexe -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Sexe</label>
                <div class=\"relative\">
                    <i class=\"fas fa-venus text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "gender", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control w-full p-2 flex items-center border rounded-lg ps-10 "]]);
        yield "
                </div>
            </div>

            <!-- Prénom -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Prénom</label>
                <div class=\"relative\">
                    <i class=\"fas fa-user text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "firstname", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control w-full p-2 flex items-center border rounded-lg ps-10"]]);
        yield "
                </div>
            </div>

            <!-- Nom -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Nom</label>
                <div class=\"relative\">
                    <i class=\"fas fa-user text-gray-600 p-2  absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "lastname", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control w-full p-2 flex items-center border rounded-lg ps-10"]]);
        yield "
                </div>
            </div>

            <!-- Téléphone -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Téléphone</label>
                <div class=\"relative\">
                    <i class=\"fas fa-phone text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "phoneNumber", [], "any", false, false, false, 40), 'row', ["attr" => ["class" => "form-control w-full p-2 flex items-center border rounded-lg ps-10"]]);
        yield "
                </div>
            </div>

            <!-- Adresse -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Adresse</label>
                <div class=\"relative\">
                    <i class=\"fas fa-map-marker-alt text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "street", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control w-full p-2 flex items-center border rounded-lg ps-10"]]);
        yield "
                </div>
            </div>
        </div>

        <!-- Colonne 2 (à droite) -->
        <div class=\"mx-6 col-start-2 sm:mr-24\">
            <!-- Ville -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Ville</label>
                <div class=\"relative\">
                    <i class=\"fas fa-city text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "city", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-control w-full p-2 flex items-center border rounded-lg ps-10"]]);
        yield "
                </div>
            </div>

            <!-- Code postal -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Code postal</label>
                <div class=\"relative\">
                    <i class=\"fas fa-mail-bulk text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "zipCode", [], "any", false, false, false, 70), 'row', ["attr" => ["class" => "form-control w-full p-2 flex items-center border rounded-lg ps-10"]]);
        yield "
                </div>
            </div>

            <!-- Email -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Email</label>
                <div class=\"relative\">
                    <i class=\"fas fa-envelope text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), 'row', ["attr" => ["class" => "form-control w-full p-2 flex items-center border rounded-lg ps-10"]]);
        yield "
                </div>
            </div>

            <!-- Mot de passe -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Mot de passe</label>
                <div class=\"relative\">
                    <i class=\"fas fa-lock text-gray-600 p-2  absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "plainPassword", [], "any", false, false, false, 88), "first", [], "any", false, false, false, 88), 'row', ["attr" => ["class" => "form-control w-full p-2 flex items-center border rounded-lg ps-10", "placeholder" => "Minimum 8 caractères"]]);
        yield "
                </div>
            </div>

            <!-- Confirmez le mot de passe -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Confirmez le mot de passe</label>
                <div class=\"relative\">
                    <i class=\"fas fa-lock text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "plainPassword", [], "any", false, false, false, 97), "second", [], "any", false, false, false, 97), 'row', ["attr" => ["class" => "form-control w-full p-2 flex items-center border rounded-lg ps-10", "placeholder" => "Confirmez votre mot de passe"]]);
        yield "
                </div>
            </div>

            
        </div>

</div>

<!-- Accepter les termes -->
            <div class=\"ml-6 items-center justify-items-center mt-4 sm:ml-24\">
                <div class=\"flex items-center\">
<input type=\"checkbox\" class=\"form-checkbox w-4 h-4\" id=\"terms\" name=\"terms\" required>
<label class=\"form-check-label ml-2\" for=\"terms\">
    J'accepte les <a href=\"\" target=\"_blank\">conditions générales d'utilisation</a>
</label>
                </div>
            </div>
        <!-- Bouton Inscription -->
<div class=\"mt-4 text-center\">
    <button type=\"submit\" class=\"items-center py-5 px-10 border border-transparent text-sm font-medium rounded-md text-white bg-teal-900 hover:cursor-pointer hover:transition hover:delay-100 hover:duration-100 hover:scale-105\">Inscription</button>
</div>
</div>
        ";
        // line 120
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_end');
        yield "
    
</div>
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
        return "user/_form.html.twig";
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
        return array (  198 => 120,  172 => 97,  160 => 88,  148 => 79,  136 => 70,  124 => 61,  109 => 49,  97 => 40,  85 => 31,  73 => 22,  61 => 13,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mx-auto \">
    
        {{ form_start(form) }}
<div class=\" bg-vert pt-4 pb-4  mx-12 rounded mt-3 \">
        <!-- Colonne 1 (à gauche) -->
<div class=\"shrink-0 sm:grid grid-cols-2 gap-3 \">
        <div class=\" mx-6 sm:col md:col lg:col sm:ml-24 text-black \">
            <!-- Sexe -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Sexe</label>
                <div class=\"relative\">
                    <i class=\"fas fa-venus text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    {{ form_row(form.gender, {'attr': {'class': 'form-control w-full p-2 flex items-center border rounded-lg ps-10 '}}) }}
                </div>
            </div>

            <!-- Prénom -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Prénom</label>
                <div class=\"relative\">
                    <i class=\"fas fa-user text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    {{ form_row(form.firstname, {'attr': {'class': 'form-control w-full p-2 flex items-center border rounded-lg ps-10'}}) }}
                </div>
            </div>

            <!-- Nom -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Nom</label>
                <div class=\"relative\">
                    <i class=\"fas fa-user text-gray-600 p-2  absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    {{ form_row(form.lastname, {'attr': {'class': 'form-control w-full p-2 flex items-center border rounded-lg ps-10'}}) }}
                </div>
            </div>

            <!-- Téléphone -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Téléphone</label>
                <div class=\"relative\">
                    <i class=\"fas fa-phone text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    {{ form_row(form.phoneNumber, {'attr': {'class': 'form-control w-full p-2 flex items-center border rounded-lg ps-10'}}) }}
                </div>
            </div>

            <!-- Adresse -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Adresse</label>
                <div class=\"relative\">
                    <i class=\"fas fa-map-marker-alt text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    {{ form_row(form.street, {'attr': {'class': 'form-control w-full p-2 flex items-center border rounded-lg ps-10' }}) }}
                </div>
            </div>
        </div>

        <!-- Colonne 2 (à droite) -->
        <div class=\"mx-6 col-start-2 sm:mr-24\">
            <!-- Ville -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Ville</label>
                <div class=\"relative\">
                    <i class=\"fas fa-city text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    {{ form_row(form.city, {'attr': {'class': 'form-control w-full p-2 flex items-center border rounded-lg ps-10'}}) }}
                </div>
            </div>

            <!-- Code postal -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Code postal</label>
                <div class=\"relative\">
                    <i class=\"fas fa-mail-bulk text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    {{ form_row(form.zipCode, {'attr': {'class': 'form-control w-full p-2 flex items-center border rounded-lg ps-10'}}) }}
                </div>
            </div>

            <!-- Email -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Email</label>
                <div class=\"relative\">
                    <i class=\"fas fa-envelope text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    {{ form_row(form.email, {'attr': {'class': 'form-control w-full p-2 flex items-center border rounded-lg ps-10'}}) }}
                </div>
            </div>

            <!-- Mot de passe -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Mot de passe</label>
                <div class=\"relative\">
                    <i class=\"fas fa-lock text-gray-600 p-2  absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    {{ form_row(form.plainPassword.first, {'attr': {'class': 'form-control w-full p-2 flex items-center border rounded-lg ps-10', 'placeholder': 'Minimum 8 caractères'}}) }}
                </div>
            </div>

            <!-- Confirmez le mot de passe -->
            <div class=\"mb-3\">
                <label class=\"text-black\">Confirmez le mot de passe</label>
                <div class=\"relative\">
                    <i class=\"fas fa-lock text-gray-600 p-2 absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none\"></i>
                    {{ form_row(form.plainPassword.second, {'attr': {'class': 'form-control w-full p-2 flex items-center border rounded-lg ps-10', 'placeholder': 'Confirmez votre mot de passe'}}) }}
                </div>
            </div>

            
        </div>

</div>

<!-- Accepter les termes -->
            <div class=\"ml-6 items-center justify-items-center mt-4 sm:ml-24\">
                <div class=\"flex items-center\">
<input type=\"checkbox\" class=\"form-checkbox w-4 h-4\" id=\"terms\" name=\"terms\" required>
<label class=\"form-check-label ml-2\" for=\"terms\">
    J'accepte les <a href=\"\" target=\"_blank\">conditions générales d'utilisation</a>
</label>
                </div>
            </div>
        <!-- Bouton Inscription -->
<div class=\"mt-4 text-center\">
    <button type=\"submit\" class=\"items-center py-5 px-10 border border-transparent text-sm font-medium rounded-md text-white bg-teal-900 hover:cursor-pointer hover:transition hover:delay-100 hover:duration-100 hover:scale-105\">Inscription</button>
</div>
</div>
        {{ form_end(form) }}
    
</div>
", "user/_form.html.twig", "/var/www/html/doc-and-go/templates/user/_form.html.twig");
    }
}
