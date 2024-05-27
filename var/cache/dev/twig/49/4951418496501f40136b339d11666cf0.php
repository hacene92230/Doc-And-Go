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

/* appointment/all.html.twig */
class __TwigTemplate_5fb818ec132d4b4a46c6a6bb0bcf5cdd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/all.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "appointment/all.html.twig", 1);
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

        yield "Rendez-vous patients";
        
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
        yield "    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .page-title {
            font-size: 2em;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .date-group {
            margin-bottom: 20px;
        }

        .date-title {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #555;
        }

        .appointments {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .appointment-card {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .appointment-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .appointment-time {
            font-size: 1.1em;
            color: #555;
        }

        .appointment-comment {
            font-size: 1.1em;
            color: #333;
            margin-bottom: 10px;
        }

        .appointment-user {
            font-size: 1.1em;
        }

        .label {
            font-weight: bold;
            color: #333;
        }

        .user-link {
            color: #007bff;
            text-decoration: none;
        }

        .user-link:hover {
            text-decoration: underline;
        }

        .no-appointments {
            text-align: center;
            font-size: 1.2em;
            color: #999;
            margin-top: 20px;
        }

        .dropdown-menu {
            width: 100%;
        }

        .modify-status-link {
            color: #007bff;
            text-decoration: none;
        }

        .modify-status-link:hover {
            text-decoration: underline;
        }
    </style>

    <div class=\"container\">
        <h1 class=\"page-title\">Les rendez-vous de mes patients</h1>

        ";
        // line 103
        $context["now"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "U");
        // line 104
        yield "
        <div class=\"dropdown mb-3\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"upcomingAppointmentsDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Rendez-vous à venir
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"upcomingAppointmentsDropdown\">
                <div class=\"p-3\">
                    ";
        // line 111
        $context["has_upcoming_appointments"] = false;
        // line 112
        yield "                    ";
        $context["current_date"] = null;
        // line 113
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 114
            yield "                        ";
            if ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 114), "U") >= (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 114, $this->source); })()))) {
                // line 115
                yield "                            ";
                $context["has_upcoming_appointments"] = true;
                // line 116
                yield "                            ";
                $context["appointment_date"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 116), "d/m/Y");
                // line 117
                yield "                            ";
                if (((isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 117, $this->source); })()) != (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 117, $this->source); })()))) {
                    // line 118
                    yield "                                ";
                    if ( !(null === (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 118, $this->source); })()))) {
                        // line 119
                        yield "                                    </div>
                                ";
                    }
                    // line 121
                    yield "                                ";
                    $context["current_date"] = (isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 121, $this->source); })());
                    // line 122
                    yield "                                <div class=\"date-group\">
                                    <h3 class=\"date-title\">";
                    // line 123
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 123, $this->source); })()), "html", null, true);
                    yield "</h3>
                                    <div class=\"appointments\">
                            ";
                }
                // line 126
                yield "                            <div class=\"appointment-card\">
                                <div class=\"appointment-details\">
                                    <div class=\"appointment-time\">
                                        <span class=\"label\">Heure :</span> ";
                // line 129
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 129), "H:i"), "html", null, true);
                yield "
                                    </div>
                                </div>
                                <div class=\"appointment-comment\">
                                    <span class=\"label\">Commentaire :</span> ";
                // line 133
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "comment", [], "any", false, false, false, 133), "html", null, true);
                yield "
                                </div>
                                <div class=\"appointment-user\">
                                    <span class=\"label\">Réservé par :</span> 
                                    <a href=\"";
                // line 137
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137)]), "html", null, true);
                yield "\" class=\"user-link\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 137), "firstName", [], "any", false, false, false, 137), "html", null, true);
                yield "</a>
                                </div>
                                <div class=\"row\">
                                    <h3>Statu (";
                // line 140
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140), "html", null, true);
                yield ")</h3>
                                    ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 141, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["statu"]) {
                    // line 142
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 142), "name", [], "any", false, false, false, 142) != CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 142))) {
                        // line 143
                        yield "                                    <div class=\"col-3\">
                                            <form action=\"";
                        // line 144
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_status_edit", ["appointment" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                        yield "\" method=\"POST\">
                                                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                                                <input type=\"hidden\" name=\"status\" value=\"";
                        // line 146
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 146), "html", null, true);
                        yield "\">
                                                <button type=\"submit\" class=\"btn btn-primary\">";
                        // line 147
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 147), "html", null, true);
                        yield "</button>
                                            </form>
                                        </div>
                                        ";
                    }
                    // line 151
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                yield "                                </div>
                            </div>      

                            </div>
                        ";
            }
            // line 157
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "                    ";
        if ( !(null === (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 158, $this->source); })()))) {
            // line 159
            yield "                        </div>
                    ";
        }
        // line 161
        yield "                    ";
        if ( !(isset($context["has_upcoming_appointments"]) || array_key_exists("has_upcoming_appointments", $context) ? $context["has_upcoming_appointments"] : (function () { throw new RuntimeError('Variable "has_upcoming_appointments" does not exist.', 161, $this->source); })())) {
            // line 162
            yield "                        <p class=\"no-appointments\">Aucun rendez-vous à venir à afficher.</p>
                    ";
        }
        // line 164
        yield "                </div>
            </div>
        </div>

        <div class=\"dropdown mb-3\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"pastAppointmentsDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Rendez-vous passés
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"pastAppointmentsDropdown\">
                <div class=\"p-3\">
                    ";
        // line 174
        $context["has_past_appointments"] = false;
        // line 175
        yield "                    ";
        $context["current_date"] = null;
        // line 176
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 177
            yield "                        ";
            if ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 177), "U") < (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 177, $this->source); })()))) {
                // line 178
                yield "                            ";
                $context["has_past_appointments"] = true;
                // line 179
                yield "                            ";
                $context["appointment_date"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 179), "d/m/Y");
                // line 180
                yield "                            ";
                if (((isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 180, $this->source); })()) != (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 180, $this->source); })()))) {
                    // line 181
                    yield "                                ";
                    if ( !(null === (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 181, $this->source); })()))) {
                        // line 182
                        yield "                                    </div>
                                ";
                    }
                    // line 184
                    yield "                                ";
                    $context["current_date"] = (isset($context["appointment_date"]) || array_key_exists("appointment_date", $context) ? $context["appointment_date"] : (function () { throw new RuntimeError('Variable "appointment_date" does not exist.', 184, $this->source); })());
                    // line 185
                    yield "                                <div class=\"date-group\">
                                    <h3 class=\"date-title\">";
                    // line 186
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 186, $this->source); })()), "html", null, true);
                    yield "</h3>
                                    <div class=\"appointments\">
                            ";
                }
                // line 189
                yield "                            <div class=\"appointment-card\">
                                <div class=\"appointment-details\">
                                    <div class=\"appointment-time\">
                                        <span class=\"label\">Heure :</span> ";
                // line 192
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "dateTime", [], "any", false, false, false, 192), "H:i"), "html", null, true);
                yield "
                                    </div>
                                </div>
                                <div class=\"appointment-comment\">
                                    <span class=\"label\">Commentaire :</span> ";
                // line 196
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "comment", [], "any", false, false, false, 196), "html", null, true);
                yield "
                                </div>
                                <div class=\"appointment-user\">
                                    <span class=\"label\">Réservé par :</span> 
                                    <a href=\"";
                // line 200
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 200), "id", [], "any", false, false, false, 200)]), "html", null, true);
                yield "\" class=\"user-link\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "user", [], "any", false, false, false, 200), "firstName", [], "any", false, false, false, 200), "html", null, true);
                yield "</a>
                                </div>

                                <div class=\"row\">
                                    <h3>Status (";
                // line 204
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 204), "name", [], "any", false, false, false, 204), "html", null, true);
                yield ")</h3>
                                    ";
                // line 205
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 205, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["statu"]) {
                    // line 206
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "statu", [], "any", false, false, false, 206), "name", [], "any", false, false, false, 206) != CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 206))) {
                        // line 207
                        yield "                                    <div class=\"col-3\">
                                            <form action=\"";
                        // line 208
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_status_edit", ["appointment" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 208)]), "html", null, true);
                        yield "\" method=\"POST\">
                                                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                                                <input type=\"hidden\" name=\"status\" value=\"";
                        // line 210
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 210), "html", null, true);
                        yield "\">
                                                <button type=\"submit\" class=\"btn btn-primary\">";
                        // line 211
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["statu"], "name", [], "any", false, false, false, 211), "html", null, true);
                        yield "</button>
                                            </form>
                                            ";
                    }
                    // line 214
                    yield "                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 216
                yield "                                </div>
                            </div>      
                            </div>
                        ";
            }
            // line 220
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        yield "                    ";
        if ( !(null === (isset($context["current_date"]) || array_key_exists("current_date", $context) ? $context["current_date"] : (function () { throw new RuntimeError('Variable "current_date" does not exist.', 221, $this->source); })()))) {
            // line 222
            yield "                        </div>
                    ";
        }
        // line 224
        yield "                    ";
        if ( !(isset($context["has_past_appointments"]) || array_key_exists("has_past_appointments", $context) ? $context["has_past_appointments"] : (function () { throw new RuntimeError('Variable "has_past_appointments" does not exist.', 224, $this->source); })())) {
            // line 225
            yield "                        <p class=\"no-appointments\">Aucun rendez-vous passé à afficher.</p>
                    ";
        }
        // line 227
        yield "                </div>
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
        return "appointment/all.html.twig";
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
        return array (  473 => 227,  469 => 225,  466 => 224,  462 => 222,  459 => 221,  453 => 220,  447 => 216,  440 => 214,  434 => 211,  430 => 210,  425 => 208,  422 => 207,  419 => 206,  415 => 205,  411 => 204,  402 => 200,  395 => 196,  388 => 192,  383 => 189,  377 => 186,  374 => 185,  371 => 184,  367 => 182,  364 => 181,  361 => 180,  358 => 179,  355 => 178,  352 => 177,  347 => 176,  344 => 175,  342 => 174,  330 => 164,  326 => 162,  323 => 161,  319 => 159,  316 => 158,  310 => 157,  303 => 152,  297 => 151,  290 => 147,  286 => 146,  281 => 144,  278 => 143,  276 => 142,  272 => 141,  268 => 140,  260 => 137,  253 => 133,  246 => 129,  241 => 126,  235 => 123,  232 => 122,  229 => 121,  225 => 119,  222 => 118,  219 => 117,  216 => 116,  213 => 115,  210 => 114,  205 => 113,  202 => 112,  200 => 111,  191 => 104,  189 => 103,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rendez-vous patients{% endblock %}

{% block body %}
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .page-title {
            font-size: 2em;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .date-group {
            margin-bottom: 20px;
        }

        .date-title {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #555;
        }

        .appointments {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .appointment-card {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .appointment-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .appointment-time {
            font-size: 1.1em;
            color: #555;
        }

        .appointment-comment {
            font-size: 1.1em;
            color: #333;
            margin-bottom: 10px;
        }

        .appointment-user {
            font-size: 1.1em;
        }

        .label {
            font-weight: bold;
            color: #333;
        }

        .user-link {
            color: #007bff;
            text-decoration: none;
        }

        .user-link:hover {
            text-decoration: underline;
        }

        .no-appointments {
            text-align: center;
            font-size: 1.2em;
            color: #999;
            margin-top: 20px;
        }

        .dropdown-menu {
            width: 100%;
        }

        .modify-status-link {
            color: #007bff;
            text-decoration: none;
        }

        .modify-status-link:hover {
            text-decoration: underline;
        }
    </style>

    <div class=\"container\">
        <h1 class=\"page-title\">Les rendez-vous de mes patients</h1>

        {% set now = \"now\"|date(\"U\") %}

        <div class=\"dropdown mb-3\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"upcomingAppointmentsDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Rendez-vous à venir
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"upcomingAppointmentsDropdown\">
                <div class=\"p-3\">
                    {% set has_upcoming_appointments = false %}
                    {% set current_date = null %}
                    {% for appointment in appointments %}
                        {% if appointment.dateTime|date(\"U\") >= now %}
                            {% set has_upcoming_appointments = true %}
                            {% set appointment_date = appointment.dateTime|date('d/m/Y') %}
                            {% if appointment_date != current_date %}
                                {% if current_date is not null %}
                                    </div>
                                {% endif %}
                                {% set current_date = appointment_date %}
                                <div class=\"date-group\">
                                    <h3 class=\"date-title\">{{ current_date }}</h3>
                                    <div class=\"appointments\">
                            {% endif %}
                            <div class=\"appointment-card\">
                                <div class=\"appointment-details\">
                                    <div class=\"appointment-time\">
                                        <span class=\"label\">Heure :</span> {{ appointment.dateTime|date('H:i') }}
                                    </div>
                                </div>
                                <div class=\"appointment-comment\">
                                    <span class=\"label\">Commentaire :</span> {{ appointment.comment }}
                                </div>
                                <div class=\"appointment-user\">
                                    <span class=\"label\">Réservé par :</span> 
                                    <a href=\"{{ path('app_user_show', {'id': appointment.user.id}) }}\" class=\"user-link\">{{ appointment.user.firstName }}</a>
                                </div>
                                <div class=\"row\">
                                    <h3>Statu ({{ appointment.statu.name }})</h3>
                                    {% for statu in statusList %}
{% if appointment.statu.name != statu.name %}
                                    <div class=\"col-3\">
                                            <form action=\"{{ path('app_status_edit', {'appointment': appointment.id}) }}\" method=\"POST\">
                                                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                                                <input type=\"hidden\" name=\"status\" value=\"{{ statu.name }}\">
                                                <button type=\"submit\" class=\"btn btn-primary\">{{ statu.name }}</button>
                                            </form>
                                        </div>
                                        {% endif %}
                                        {% endfor %}
                                </div>
                            </div>      

                            </div>
                        {% endif %}
                    {% endfor %}
                    {% if current_date is not null %}
                        </div>
                    {% endif %}
                    {% if not has_upcoming_appointments %}
                        <p class=\"no-appointments\">Aucun rendez-vous à venir à afficher.</p>
                    {% endif %}
                </div>
            </div>
        </div>

        <div class=\"dropdown mb-3\">
            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"pastAppointmentsDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Rendez-vous passés
            </button>
            <div class=\"dropdown-menu\" aria-labelledby=\"pastAppointmentsDropdown\">
                <div class=\"p-3\">
                    {% set has_past_appointments = false %}
                    {% set current_date = null %}
                    {% for appointment in appointments %}
                        {% if appointment.dateTime|date(\"U\") < now %}
                            {% set has_past_appointments = true %}
                            {% set appointment_date = appointment.dateTime|date('d/m/Y') %}
                            {% if appointment_date != current_date %}
                                {% if current_date is not null %}
                                    </div>
                                {% endif %}
                                {% set current_date = appointment_date %}
                                <div class=\"date-group\">
                                    <h3 class=\"date-title\">{{ current_date }}</h3>
                                    <div class=\"appointments\">
                            {% endif %}
                            <div class=\"appointment-card\">
                                <div class=\"appointment-details\">
                                    <div class=\"appointment-time\">
                                        <span class=\"label\">Heure :</span> {{ appointment.dateTime|date('H:i') }}
                                    </div>
                                </div>
                                <div class=\"appointment-comment\">
                                    <span class=\"label\">Commentaire :</span> {{ appointment.comment }}
                                </div>
                                <div class=\"appointment-user\">
                                    <span class=\"label\">Réservé par :</span> 
                                    <a href=\"{{ path('app_user_show', {'id': appointment.user.id}) }}\" class=\"user-link\">{{ appointment.user.firstName }}</a>
                                </div>

                                <div class=\"row\">
                                    <h3>Status ({{ appointment.statu.name }})</h3>
                                    {% for statu in statusList %}
                                    {% if appointment.statu.name != statu.name %}
                                    <div class=\"col-3\">
                                            <form action=\"{{ path('app_status_edit', {'appointment': appointment.id}) }}\" method=\"POST\">
                                                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                                                <input type=\"hidden\" name=\"status\" value=\"{{ statu.name }}\">
                                                <button type=\"submit\" class=\"btn btn-primary\">{{ statu.name }}</button>
                                            </form>
                                            {% endif %}
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>      
                            </div>
                        {% endif %}
                    {% endfor %}
                    {% if current_date is not null %}
                        </div>
                    {% endif %}
                    {% if not has_past_appointments %}
                        <p class=\"no-appointments\">Aucun rendez-vous passé à afficher.</p>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "appointment/all.html.twig", "/var/www/html/doc-and-go/templates/appointment/all.html.twig");
    }
}
