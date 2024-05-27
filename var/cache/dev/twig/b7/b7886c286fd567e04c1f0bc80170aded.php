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

/* appointment/_form.html.twig */
class __TwigTemplate_4ee772fe1f99f6a29ad9b60932e91ddf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/_form.html.twig"));

        // line 1
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["planings"]) || array_key_exists("planings", $context) ? $context["planings"] : (function () { throw new RuntimeError('Variable "planings" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["id" => "appointment-form"]]);
            yield "

<div class=\"container mt-4\">
    <h2>Choisissez un créneau horaire :</h2>
    ";
            // line 6
            $context["groupSize"] = 5;
            // line 7
            yield "    ";
            $context["currentGroup"] = 0;
            // line 8
            yield "    ";
            $context["slotCount"] = 0;
            // line 9
            yield "
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["planings"]) || array_key_exists("planings", $context) ? $context["planings"] : (function () { throw new RuntimeError('Variable "planings" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["planing"]) {
                // line 11
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["planing"], "dayWorks", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["slot"]) {
                    // line 12
                    yield "            ";
                    if ((((isset($context["slotCount"]) || array_key_exists("slotCount", $context) ? $context["slotCount"] : (function () { throw new RuntimeError('Variable "slotCount" does not exist.', 12, $this->source); })()) % (isset($context["groupSize"]) || array_key_exists("groupSize", $context) ? $context["groupSize"] : (function () { throw new RuntimeError('Variable "groupSize" does not exist.', 12, $this->source); })())) == 0)) {
                        // line 13
                        yield "                ";
                        if (((isset($context["slotCount"]) || array_key_exists("slotCount", $context) ? $context["slotCount"] : (function () { throw new RuntimeError('Variable "slotCount" does not exist.', 13, $this->source); })()) > 0)) {
                            // line 14
                            yield "                    </div>                 ";
                        }
                        // line 16
                        yield "                ";
                        $context["currentGroup"] = ((isset($context["currentGroup"]) || array_key_exists("currentGroup", $context) ? $context["currentGroup"] : (function () { throw new RuntimeError('Variable "currentGroup" does not exist.', 16, $this->source); })()) + 1);
                        // line 17
                        yield "                <div id=\"group-";
                        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["currentGroup"]) || array_key_exists("currentGroup", $context) ? $context["currentGroup"] : (function () { throw new RuntimeError('Variable "currentGroup" does not exist.', 17, $this->source); })()), "html", null, true);
                        yield "\" class=\"slot-group\" style=\"";
                        if (((isset($context["currentGroup"]) || array_key_exists("currentGroup", $context) ? $context["currentGroup"] : (function () { throw new RuntimeError('Variable "currentGroup" does not exist.', 17, $this->source); })()) != 1)) {
                            yield "display: none;";
                        }
                        yield "\">
            ";
                    }
                    // line 19
                    yield "
            <h3>";
                    // line 20
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "date", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
                    yield "</h3>
            ";
                    // line 21
                    $context["startTime"] = CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "startHour", [], "any", false, false, false, 21);
                    // line 22
                    yield "            ";
                    $context["endTime"] = CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "endHour", [], "any", false, false, false, 22);
                    // line 23
                    yield "            ";
                    $context["duration"] = CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "slotDuration", [], "any", false, false, false, 23);
                    // line 24
                    yield "
            ";
                    // line 25
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(0, ((((Twig\Extension\CoreExtension::dateFormatFilter($this->env, (isset($context["endTime"]) || array_key_exists("endTime", $context) ? $context["endTime"] : (function () { throw new RuntimeError('Variable "endTime" does not exist.', 25, $this->source); })()), "U") - Twig\Extension\CoreExtension::dateFormatFilter($this->env, (isset($context["startTime"]) || array_key_exists("startTime", $context) ? $context["startTime"] : (function () { throw new RuntimeError('Variable "startTime" does not exist.', 25, $this->source); })()), "U")) / 60) / (isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 25, $this->source); })())) - 1)));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 26
                        yield "                ";
                        $context["currentSlot"] = Twig\Extension\CoreExtension::dateFormatFilter($this->env, (isset($context["startTime"]) || array_key_exists("startTime", $context) ? $context["startTime"] : (function () { throw new RuntimeError('Variable "startTime" does not exist.', 26, $this->source); })()), "H:i");
                        // line 27
                        yield "                ";
                        $context["formattedSlot"] = ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["slot"], "date", [], "any", false, false, false, 27), "Y-m-d") . " ") . (isset($context["currentSlot"]) || array_key_exists("currentSlot", $context) ? $context["currentSlot"] : (function () { throw new RuntimeError('Variable "currentSlot" does not exist.', 27, $this->source); })()));
                        // line 28
                        yield "
                ";
                        // line 30
                        yield "                ";
                        if (!CoreExtension::inFilter((isset($context["formattedSlot"]) || array_key_exists("formattedSlot", $context) ? $context["formattedSlot"] : (function () { throw new RuntimeError('Variable "formattedSlot" does not exist.', 30, $this->source); })()), (isset($context["reservedSlots"]) || array_key_exists("reservedSlots", $context) ? $context["reservedSlots"] : (function () { throw new RuntimeError('Variable "reservedSlots" does not exist.', 30, $this->source); })()))) {
                            // line 31
                            yield "                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"appointment[dateTime]\" value=\"";
                            // line 32
                            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["formattedSlot"]) || array_key_exists("formattedSlot", $context) ? $context["formattedSlot"] : (function () { throw new RuntimeError('Variable "formattedSlot" does not exist.', 32, $this->source); })()), "html", null, true);
                            yield "\" id=\"slot-";
                            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 32), "html", null, true);
                            yield "\">
                        <label class=\"form-check-label\" for=\"slot-";
                            // line 33
                            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33), "html", null, true);
                            yield "\">
                            <span>";
                            // line 34
                            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["currentSlot"]) || array_key_exists("currentSlot", $context) ? $context["currentSlot"] : (function () { throw new RuntimeError('Variable "currentSlot" does not exist.', 34, $this->source); })()), "html", null, true);
                            yield "</span> ";
                            // line 35
                            yield "                        </label>
                    </div>
                ";
                        }
                        // line 38
                        yield "                ";
                        $context["startTime"] = Twig\Extension\CoreExtension::dateModifyFilter($this->env, (isset($context["startTime"]) || array_key_exists("startTime", $context) ? $context["startTime"] : (function () { throw new RuntimeError('Variable "startTime" does not exist.', 38, $this->source); })()), (("+" . (isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 38, $this->source); })())) . "minutes"));
                        // line 39
                        yield "            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    yield "
            ";
                    // line 41
                    $context["slotCount"] = ((isset($context["slotCount"]) || array_key_exists("slotCount", $context) ? $context["slotCount"] : (function () { throw new RuntimeError('Variable "slotCount" does not exist.', 41, $this->source); })()) + 1);
                    // line 42
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slot'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "    </div> ";
            // line 45
            yield "</div>

<div class=\"btn-group mt-4\">
    <button id=\"prev-button\" class=\"btn btn-secondary\" type=\"button\" onclick=\"showPreviousGroup()\">Afficher les créneaux précédents</button>
    <button id=\"next-button\" class=\"btn btn-secondary\" type=\"button\" onclick=\"showNextGroup()\">Afficher les créneaux suivants</button>
</div>

<div class=\"mt-4\">
    <h2>Commentaire :</h2>
    ";
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "comment", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "form-control"]]);
            yield "
</div>

<div style=\"display: none;\">
    ";
            // line 59
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dateTime", [], "any", false, false, false, 59), 'row', ["attr" => ["id" => "appointment_dateTime"]]);
            yield "
</div>
<button type=\"button\" class=\"btn btn-primary mt-4\" id=\"reservationButton\">Réserver</button>

";
            // line 63
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
            yield "

<!-- Confirmation Dialog -->
<div class=\"modal fade\" id=\"confirmationDialog\" tabindex=\"-1\" aria-labelledby=\"confirmationDialogLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"confirmationDialogLabel\">Confirmation de réservation</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p><strong>Créneau horaire :</strong> <span id=\"confirm-slot\"></span></p>
                <p><strong>Commentaire :</strong> <span id=\"confirm-comment\"></span></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                <button id=\"confirmButton\" type=\"button\" class=\"btn btn-primary\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>

<script>
    \$(document).ready(function() {
        // Event listener for reservation button
        \$('#reservationButton').click(function() {
            const selectedSlot = \$('input[name=\"appointment[dateTime]\"]:checked').val();
            const comment = \$('#appointment_comment').val() || 'Aucun commentaire saisi';

            if (!selectedSlot) {
                alert('Veuillez sélectionner un créneau horaire.');
                return;
            }

            // Remplir le champ datetime avec le créneau choisi
            \$('#appointment_dateTime').val(selectedSlot);

            // Formatage de la date pour l'affichage dans le récapitulatif
            const formattedDate = moment(selectedSlot).format('DD/MM/YYYY à HH:mm');

            \$('#confirm-slot').text(formattedDate);
            \$('#confirm-comment').text(comment);
            \$('#confirmationDialog').modal('show');
        });

        // Event listener for confirmation button
        \$('#confirmButton').click(function() {
            \$('#confirmationDialog').modal('hide');
            \$('#appointment-form').submit();
        });
        
        // Masquer le bouton précédent au chargement de la page si au début des 5 premiers jours
        if (\$('#group-1').is(':visible')) {
            \$('#prev-button').hide();
        }

        // Mettre à jour le champ DateTime lorsque l'utilisateur sélectionne un créneau
        \$('input[name=\"appointment[dateTime]\"]').change(function() {
            const selectedSlot = \$(this).val();
            \$('#appointment_dateTime').val(selectedSlot);
        });
    });

    function showPreviousGroup() {
        var currentGroup = \$('.slot-group:visible').first();
        var prevGroup = currentGroup.prev('.slot-group');

        currentGroup.hide();
        prevGroup.show();

        // Cacher le bouton précédent s'il est au début des 5 premiers jours
        if (prevGroup.attr('id') == 'group-1') {
            \$('#prev-button').hide();
        }

        // Afficher le bouton suivant
        \$('#next-button').show();
    }

    function showNextGroup() {
        var currentGroup = \$('.slot-group:visible').first();
        var nextGroup = currentGroup.next('.slot-group');

        currentGroup.hide();
        nextGroup.show();

        // Afficher le bouton précédent
        \$('#prev-button').show();

        // Cacher le bouton suivant s'il est à la fin des 5 premiers jours
        if (nextGroup.next('.slot-group').length == 0) {
            \$('#next-button').hide();
        }
    }
</script>
";
        } else {
            // line 165
            yield "<p>Pas de disponibilité pour ce docteur.</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "appointment/_form.html.twig";
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
        return array (  330 => 165,  225 => 63,  217 => 59,  210 => 54,  199 => 45,  197 => 44,  191 => 43,  185 => 42,  183 => 41,  180 => 40,  166 => 39,  163 => 38,  158 => 35,  155 => 34,  151 => 33,  145 => 32,  142 => 31,  139 => 30,  136 => 28,  133 => 27,  130 => 26,  113 => 25,  110 => 24,  107 => 23,  104 => 22,  102 => 21,  98 => 20,  95 => 19,  85 => 17,  82 => 16,  79 => 14,  76 => 13,  73 => 12,  68 => 11,  64 => 10,  61 => 9,  58 => 8,  55 => 7,  53 => 6,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if planings is not empty %}
{{ form_start(form, { 'attr': {'id': 'appointment-form'} }) }}

<div class=\"container mt-4\">
    <h2>Choisissez un créneau horaire :</h2>
    {% set groupSize = 5 %}
    {% set currentGroup = 0 %}
    {% set slotCount = 0 %}

    {% for planing in planings %}
        {% for slot in planing.dayWorks %}
            {% if slotCount % groupSize == 0 %}
                {% if slotCount > 0 %}
                    </div> {# Fermeture du groupe précédent #}
                {% endif %}
                {% set currentGroup = currentGroup + 1 %}
                <div id=\"group-{{ currentGroup }}\" class=\"slot-group\" style=\"{% if currentGroup != 1 %}display: none;{% endif %}\">
            {% endif %}

            <h3>{{ slot.date|date(\"d/m/Y\") }}</h3>
            {% set startTime = slot.startHour %}
            {% set endTime = slot.endHour %}
            {% set duration = slot.slotDuration %}

            {% for i in 0..((endTime|date(\"U\") - startTime|date(\"U\")) / 60 / duration - 1) %}
                {% set currentSlot = startTime|date(\"H:i\") %}
                {% set formattedSlot = slot.date|date('Y-m-d') ~ ' ' ~ currentSlot %}

                {# Vérifier si le créneau est déjà réservé #}
                {% if formattedSlot not in reservedSlots %}
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" name=\"appointment[dateTime]\" value=\"{{ formattedSlot }}\" id=\"slot-{{ loop.index }}\">
                        <label class=\"form-check-label\" for=\"slot-{{ loop.index }}\">
                            <span>{{ currentSlot }}</span> {# Afficher l'heure #}
                        </label>
                    </div>
                {% endif %}
                {% set startTime = startTime|date_modify('+' ~ duration ~ 'minutes') %}
            {% endfor %}

            {% set slotCount = slotCount + 1 %}
        {% endfor %}
    {% endfor %}
    </div> {# Fermeture du dernier groupe #}
</div>

<div class=\"btn-group mt-4\">
    <button id=\"prev-button\" class=\"btn btn-secondary\" type=\"button\" onclick=\"showPreviousGroup()\">Afficher les créneaux précédents</button>
    <button id=\"next-button\" class=\"btn btn-secondary\" type=\"button\" onclick=\"showNextGroup()\">Afficher les créneaux suivants</button>
</div>

<div class=\"mt-4\">
    <h2>Commentaire :</h2>
    {{ form_row(form.comment, {'attr': {'class': 'form-control'}}) }}
</div>

<div style=\"display: none;\">
    {# Champ DateTime avec ID unique pour JavaScript #}
    {{ form_row(form.dateTime, {'attr': {'id': 'appointment_dateTime'}}) }}
</div>
<button type=\"button\" class=\"btn btn-primary mt-4\" id=\"reservationButton\">Réserver</button>

{{ form_end(form) }}

<!-- Confirmation Dialog -->
<div class=\"modal fade\" id=\"confirmationDialog\" tabindex=\"-1\" aria-labelledby=\"confirmationDialogLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"confirmationDialogLabel\">Confirmation de réservation</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p><strong>Créneau horaire :</strong> <span id=\"confirm-slot\"></span></p>
                <p><strong>Commentaire :</strong> <span id=\"confirm-comment\"></span></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                <button id=\"confirmButton\" type=\"button\" class=\"btn btn-primary\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>

<script>
    \$(document).ready(function() {
        // Event listener for reservation button
        \$('#reservationButton').click(function() {
            const selectedSlot = \$('input[name=\"appointment[dateTime]\"]:checked').val();
            const comment = \$('#appointment_comment').val() || 'Aucun commentaire saisi';

            if (!selectedSlot) {
                alert('Veuillez sélectionner un créneau horaire.');
                return;
            }

            // Remplir le champ datetime avec le créneau choisi
            \$('#appointment_dateTime').val(selectedSlot);

            // Formatage de la date pour l'affichage dans le récapitulatif
            const formattedDate = moment(selectedSlot).format('DD/MM/YYYY à HH:mm');

            \$('#confirm-slot').text(formattedDate);
            \$('#confirm-comment').text(comment);
            \$('#confirmationDialog').modal('show');
        });

        // Event listener for confirmation button
        \$('#confirmButton').click(function() {
            \$('#confirmationDialog').modal('hide');
            \$('#appointment-form').submit();
        });
        
        // Masquer le bouton précédent au chargement de la page si au début des 5 premiers jours
        if (\$('#group-1').is(':visible')) {
            \$('#prev-button').hide();
        }

        // Mettre à jour le champ DateTime lorsque l'utilisateur sélectionne un créneau
        \$('input[name=\"appointment[dateTime]\"]').change(function() {
            const selectedSlot = \$(this).val();
            \$('#appointment_dateTime').val(selectedSlot);
        });
    });

    function showPreviousGroup() {
        var currentGroup = \$('.slot-group:visible').first();
        var prevGroup = currentGroup.prev('.slot-group');

        currentGroup.hide();
        prevGroup.show();

        // Cacher le bouton précédent s'il est au début des 5 premiers jours
        if (prevGroup.attr('id') == 'group-1') {
            \$('#prev-button').hide();
        }

        // Afficher le bouton suivant
        \$('#next-button').show();
    }

    function showNextGroup() {
        var currentGroup = \$('.slot-group:visible').first();
        var nextGroup = currentGroup.next('.slot-group');

        currentGroup.hide();
        nextGroup.show();

        // Afficher le bouton précédent
        \$('#prev-button').show();

        // Cacher le bouton suivant s'il est à la fin des 5 premiers jours
        if (nextGroup.next('.slot-group').length == 0) {
            \$('#next-button').hide();
        }
    }
</script>
{% else %}
<p>Pas de disponibilité pour ce docteur.</p>
{% endif %}", "appointment/_form.html.twig", "/var/www/html/doc-and-go/templates/appointment/_form.html.twig");
    }
}
