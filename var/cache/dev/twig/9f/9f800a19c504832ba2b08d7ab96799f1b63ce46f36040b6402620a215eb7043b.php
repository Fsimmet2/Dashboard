<?php

/* form_div_layout.html.twig */
class __TwigTemplate_782eaffd4f72edfdee5eaf1b9da15144937c020a301885295facd6b4f1edf41e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9081358b7de746de1af2911b0177a5754898b828a13cd2915ee573317450019e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9081358b7de746de1af2911b0177a5754898b828a13cd2915ee573317450019e->enter($__internal_9081358b7de746de1af2911b0177a5754898b828a13cd2915ee573317450019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_9081358b7de746de1af2911b0177a5754898b828a13cd2915ee573317450019e->leave($__internal_9081358b7de746de1af2911b0177a5754898b828a13cd2915ee573317450019e_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_344071c1d63b3f508c5a543db45b5cedb90a9d6a1f3a2738fd6551d9cec31446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344071c1d63b3f508c5a543db45b5cedb90a9d6a1f3a2738fd6551d9cec31446->enter($__internal_344071c1d63b3f508c5a543db45b5cedb90a9d6a1f3a2738fd6551d9cec31446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_344071c1d63b3f508c5a543db45b5cedb90a9d6a1f3a2738fd6551d9cec31446->leave($__internal_344071c1d63b3f508c5a543db45b5cedb90a9d6a1f3a2738fd6551d9cec31446_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0898745d8528240d903555e9a0589fb30e1f102d39588a224d72ac08e30652d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0898745d8528240d903555e9a0589fb30e1f102d39588a224d72ac08e30652d9->enter($__internal_0898745d8528240d903555e9a0589fb30e1f102d39588a224d72ac08e30652d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_0898745d8528240d903555e9a0589fb30e1f102d39588a224d72ac08e30652d9->leave($__internal_0898745d8528240d903555e9a0589fb30e1f102d39588a224d72ac08e30652d9_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_4a592b85a5a6b3246f9fee91dfffbdcde34acdec068507d29d7737653c8e2513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a592b85a5a6b3246f9fee91dfffbdcde34acdec068507d29d7737653c8e2513->enter($__internal_4a592b85a5a6b3246f9fee91dfffbdcde34acdec068507d29d7737653c8e2513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_4a592b85a5a6b3246f9fee91dfffbdcde34acdec068507d29d7737653c8e2513->leave($__internal_4a592b85a5a6b3246f9fee91dfffbdcde34acdec068507d29d7737653c8e2513_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_67ada81af544cd7df3521eaaa720bc6d96bed52aff2d7c0cef9cf1a63f54a9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ada81af544cd7df3521eaaa720bc6d96bed52aff2d7c0cef9cf1a63f54a9d4->enter($__internal_67ada81af544cd7df3521eaaa720bc6d96bed52aff2d7c0cef9cf1a63f54a9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_67ada81af544cd7df3521eaaa720bc6d96bed52aff2d7c0cef9cf1a63f54a9d4->leave($__internal_67ada81af544cd7df3521eaaa720bc6d96bed52aff2d7c0cef9cf1a63f54a9d4_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_41b840aa51ca0f5ff9896d14e6abc8b06b63918d0303bdb7bf1be96931c24b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b840aa51ca0f5ff9896d14e6abc8b06b63918d0303bdb7bf1be96931c24b13->enter($__internal_41b840aa51ca0f5ff9896d14e6abc8b06b63918d0303bdb7bf1be96931c24b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_41b840aa51ca0f5ff9896d14e6abc8b06b63918d0303bdb7bf1be96931c24b13->leave($__internal_41b840aa51ca0f5ff9896d14e6abc8b06b63918d0303bdb7bf1be96931c24b13_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_cfaeb52f8a02943db91eb6c4d39865ae0b77a380fdce3fe6b2900c37d14a4b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfaeb52f8a02943db91eb6c4d39865ae0b77a380fdce3fe6b2900c37d14a4b89->enter($__internal_cfaeb52f8a02943db91eb6c4d39865ae0b77a380fdce3fe6b2900c37d14a4b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_cfaeb52f8a02943db91eb6c4d39865ae0b77a380fdce3fe6b2900c37d14a4b89->leave($__internal_cfaeb52f8a02943db91eb6c4d39865ae0b77a380fdce3fe6b2900c37d14a4b89_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_35640a5b492ff9bf263e7849648c425216b80e963771bdae27d02ef96b3b1977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35640a5b492ff9bf263e7849648c425216b80e963771bdae27d02ef96b3b1977->enter($__internal_35640a5b492ff9bf263e7849648c425216b80e963771bdae27d02ef96b3b1977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_35640a5b492ff9bf263e7849648c425216b80e963771bdae27d02ef96b3b1977->leave($__internal_35640a5b492ff9bf263e7849648c425216b80e963771bdae27d02ef96b3b1977_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ea7e93d010c440a27594484a3669183f6a213994950793596c136a26145ce39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7e93d010c440a27594484a3669183f6a213994950793596c136a26145ce39b->enter($__internal_ea7e93d010c440a27594484a3669183f6a213994950793596c136a26145ce39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_ea7e93d010c440a27594484a3669183f6a213994950793596c136a26145ce39b->leave($__internal_ea7e93d010c440a27594484a3669183f6a213994950793596c136a26145ce39b_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_e2bc8a53964f959ec07da7f08d3c364c9b88e68a06e6ea080fee1c71ac5fb49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bc8a53964f959ec07da7f08d3c364c9b88e68a06e6ea080fee1c71ac5fb49c->enter($__internal_e2bc8a53964f959ec07da7f08d3c364c9b88e68a06e6ea080fee1c71ac5fb49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_ab706bb260dd50383e64d2190b71f8258bc356178404c65915223d42704fc9c4 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_ab706bb260dd50383e64d2190b71f8258bc356178404c65915223d42704fc9c4)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_ab706bb260dd50383e64d2190b71f8258bc356178404c65915223d42704fc9c4);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e2bc8a53964f959ec07da7f08d3c364c9b88e68a06e6ea080fee1c71ac5fb49c->leave($__internal_e2bc8a53964f959ec07da7f08d3c364c9b88e68a06e6ea080fee1c71ac5fb49c_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a3ca5b8490e2b0e298319ce5ee3e4d0d492791218d88d79d5f5025d7befc98c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ca5b8490e2b0e298319ce5ee3e4d0d492791218d88d79d5f5025d7befc98c5->enter($__internal_a3ca5b8490e2b0e298319ce5ee3e4d0d492791218d88d79d5f5025d7befc98c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_a3ca5b8490e2b0e298319ce5ee3e4d0d492791218d88d79d5f5025d7befc98c5->leave($__internal_a3ca5b8490e2b0e298319ce5ee3e4d0d492791218d88d79d5f5025d7befc98c5_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6cb117136a65dbbf27e27094da3783257d2d2f18305a58665af69f2480bdd90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb117136a65dbbf27e27094da3783257d2d2f18305a58665af69f2480bdd90a->enter($__internal_6cb117136a65dbbf27e27094da3783257d2d2f18305a58665af69f2480bdd90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_6cb117136a65dbbf27e27094da3783257d2d2f18305a58665af69f2480bdd90a->leave($__internal_6cb117136a65dbbf27e27094da3783257d2d2f18305a58665af69f2480bdd90a_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_70e691e84363e2441e1bb52f6ee518b7c71c9cd8320c5935f2cb2acc3eee917f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e691e84363e2441e1bb52f6ee518b7c71c9cd8320c5935f2cb2acc3eee917f->enter($__internal_70e691e84363e2441e1bb52f6ee518b7c71c9cd8320c5935f2cb2acc3eee917f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_70e691e84363e2441e1bb52f6ee518b7c71c9cd8320c5935f2cb2acc3eee917f->leave($__internal_70e691e84363e2441e1bb52f6ee518b7c71c9cd8320c5935f2cb2acc3eee917f_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f8dfa02fcd0e7a9aaea0420e21b7eab10d8cdd75eec8a6fb664390cd1ee7c1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8dfa02fcd0e7a9aaea0420e21b7eab10d8cdd75eec8a6fb664390cd1ee7c1d3->enter($__internal_f8dfa02fcd0e7a9aaea0420e21b7eab10d8cdd75eec8a6fb664390cd1ee7c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_f8dfa02fcd0e7a9aaea0420e21b7eab10d8cdd75eec8a6fb664390cd1ee7c1d3->leave($__internal_f8dfa02fcd0e7a9aaea0420e21b7eab10d8cdd75eec8a6fb664390cd1ee7c1d3_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a6cdf0cc741448109f487062fa59eff63fea6816245c129a61649ac72a2e8583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cdf0cc741448109f487062fa59eff63fea6816245c129a61649ac72a2e8583->enter($__internal_a6cdf0cc741448109f487062fa59eff63fea6816245c129a61649ac72a2e8583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_a6cdf0cc741448109f487062fa59eff63fea6816245c129a61649ac72a2e8583->leave($__internal_a6cdf0cc741448109f487062fa59eff63fea6816245c129a61649ac72a2e8583_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_f287b338867f5cf4fc562ccd631bbb654836d0cf5bc4a05751ac4330cb5893c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f287b338867f5cf4fc562ccd631bbb654836d0cf5bc4a05751ac4330cb5893c7->enter($__internal_f287b338867f5cf4fc562ccd631bbb654836d0cf5bc4a05751ac4330cb5893c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_f287b338867f5cf4fc562ccd631bbb654836d0cf5bc4a05751ac4330cb5893c7->leave($__internal_f287b338867f5cf4fc562ccd631bbb654836d0cf5bc4a05751ac4330cb5893c7_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_39fa1cf9061a004afc72ef0cf3a76fb4e9f41d970d1b6b7b32412632d7dc7ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fa1cf9061a004afc72ef0cf3a76fb4e9f41d970d1b6b7b32412632d7dc7ef1->enter($__internal_39fa1cf9061a004afc72ef0cf3a76fb4e9f41d970d1b6b7b32412632d7dc7ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_39fa1cf9061a004afc72ef0cf3a76fb4e9f41d970d1b6b7b32412632d7dc7ef1->leave($__internal_39fa1cf9061a004afc72ef0cf3a76fb4e9f41d970d1b6b7b32412632d7dc7ef1_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_d7ab8a6a2316ee06dc6ffd7e41b3e135eb0d6b0323eb65f934a89389ec415c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ab8a6a2316ee06dc6ffd7e41b3e135eb0d6b0323eb65f934a89389ec415c31->enter($__internal_d7ab8a6a2316ee06dc6ffd7e41b3e135eb0d6b0323eb65f934a89389ec415c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d7ab8a6a2316ee06dc6ffd7e41b3e135eb0d6b0323eb65f934a89389ec415c31->leave($__internal_d7ab8a6a2316ee06dc6ffd7e41b3e135eb0d6b0323eb65f934a89389ec415c31_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d9663b85a4edac2ce17464599b600db69a88f0aea538aeb9d1a6ca09bf79deb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9663b85a4edac2ce17464599b600db69a88f0aea538aeb9d1a6ca09bf79deb0->enter($__internal_d9663b85a4edac2ce17464599b600db69a88f0aea538aeb9d1a6ca09bf79deb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_d9663b85a4edac2ce17464599b600db69a88f0aea538aeb9d1a6ca09bf79deb0->leave($__internal_d9663b85a4edac2ce17464599b600db69a88f0aea538aeb9d1a6ca09bf79deb0_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_b041c9fe658dde219d577573de8d862772d69e18841bf2419606485d68ef15be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b041c9fe658dde219d577573de8d862772d69e18841bf2419606485d68ef15be->enter($__internal_b041c9fe658dde219d577573de8d862772d69e18841bf2419606485d68ef15be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b041c9fe658dde219d577573de8d862772d69e18841bf2419606485d68ef15be->leave($__internal_b041c9fe658dde219d577573de8d862772d69e18841bf2419606485d68ef15be_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_0a703508ff9920bd98b7583d17d90167d2161b3ea832a6767790ef6cac44c04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a703508ff9920bd98b7583d17d90167d2161b3ea832a6767790ef6cac44c04c->enter($__internal_0a703508ff9920bd98b7583d17d90167d2161b3ea832a6767790ef6cac44c04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0a703508ff9920bd98b7583d17d90167d2161b3ea832a6767790ef6cac44c04c->leave($__internal_0a703508ff9920bd98b7583d17d90167d2161b3ea832a6767790ef6cac44c04c_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_9035366e928c492b362a98a582566b219c858d63b781c36d413d89dbe6b9eea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9035366e928c492b362a98a582566b219c858d63b781c36d413d89dbe6b9eea0->enter($__internal_9035366e928c492b362a98a582566b219c858d63b781c36d413d89dbe6b9eea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_9035366e928c492b362a98a582566b219c858d63b781c36d413d89dbe6b9eea0->leave($__internal_9035366e928c492b362a98a582566b219c858d63b781c36d413d89dbe6b9eea0_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_87b9294c9a0fbb652b2a1a5aa41edb83881cfe6bfbaefc94c41c7b46989d6717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b9294c9a0fbb652b2a1a5aa41edb83881cfe6bfbaefc94c41c7b46989d6717->enter($__internal_87b9294c9a0fbb652b2a1a5aa41edb83881cfe6bfbaefc94c41c7b46989d6717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_87b9294c9a0fbb652b2a1a5aa41edb83881cfe6bfbaefc94c41c7b46989d6717->leave($__internal_87b9294c9a0fbb652b2a1a5aa41edb83881cfe6bfbaefc94c41c7b46989d6717_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_665fc3a15d3e061aeaa97e6f3464b40ebcc8992028c6959ae59f8f59bfd94013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665fc3a15d3e061aeaa97e6f3464b40ebcc8992028c6959ae59f8f59bfd94013->enter($__internal_665fc3a15d3e061aeaa97e6f3464b40ebcc8992028c6959ae59f8f59bfd94013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_665fc3a15d3e061aeaa97e6f3464b40ebcc8992028c6959ae59f8f59bfd94013->leave($__internal_665fc3a15d3e061aeaa97e6f3464b40ebcc8992028c6959ae59f8f59bfd94013_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_bc186043b443ad7c3466d58ab28b9d68577fcfc57eab8589204f7d3ace97dbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc186043b443ad7c3466d58ab28b9d68577fcfc57eab8589204f7d3ace97dbd5->enter($__internal_bc186043b443ad7c3466d58ab28b9d68577fcfc57eab8589204f7d3ace97dbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bc186043b443ad7c3466d58ab28b9d68577fcfc57eab8589204f7d3ace97dbd5->leave($__internal_bc186043b443ad7c3466d58ab28b9d68577fcfc57eab8589204f7d3ace97dbd5_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_85a7932676863284395787e5b373737750d384843a38c051b27363cb701dd82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a7932676863284395787e5b373737750d384843a38c051b27363cb701dd82e->enter($__internal_85a7932676863284395787e5b373737750d384843a38c051b27363cb701dd82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_85a7932676863284395787e5b373737750d384843a38c051b27363cb701dd82e->leave($__internal_85a7932676863284395787e5b373737750d384843a38c051b27363cb701dd82e_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_240fc618751480d28b50661f05290d176f9093a58f6bb8a3b11df153a9263787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240fc618751480d28b50661f05290d176f9093a58f6bb8a3b11df153a9263787->enter($__internal_240fc618751480d28b50661f05290d176f9093a58f6bb8a3b11df153a9263787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_240fc618751480d28b50661f05290d176f9093a58f6bb8a3b11df153a9263787->leave($__internal_240fc618751480d28b50661f05290d176f9093a58f6bb8a3b11df153a9263787_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_e1ec9ea81e58274b98a79c7f75fc69de329b41fce44b6e425612c31368634fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ec9ea81e58274b98a79c7f75fc69de329b41fce44b6e425612c31368634fcf->enter($__internal_e1ec9ea81e58274b98a79c7f75fc69de329b41fce44b6e425612c31368634fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_e1ec9ea81e58274b98a79c7f75fc69de329b41fce44b6e425612c31368634fcf->leave($__internal_e1ec9ea81e58274b98a79c7f75fc69de329b41fce44b6e425612c31368634fcf_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_b63ba6c318bf0c68e5f9dd0f0bdba9ddc6b99e360b28913ddb8f7fc7e5b6c04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63ba6c318bf0c68e5f9dd0f0bdba9ddc6b99e360b28913ddb8f7fc7e5b6c04b->enter($__internal_b63ba6c318bf0c68e5f9dd0f0bdba9ddc6b99e360b28913ddb8f7fc7e5b6c04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_b63ba6c318bf0c68e5f9dd0f0bdba9ddc6b99e360b28913ddb8f7fc7e5b6c04b->leave($__internal_b63ba6c318bf0c68e5f9dd0f0bdba9ddc6b99e360b28913ddb8f7fc7e5b6c04b_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_c8e3af89e4071b7119e6fc4c9b7ff831cab47cac1e866dc4b72d6b7f2e79f234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e3af89e4071b7119e6fc4c9b7ff831cab47cac1e866dc4b72d6b7f2e79f234->enter($__internal_c8e3af89e4071b7119e6fc4c9b7ff831cab47cac1e866dc4b72d6b7f2e79f234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c8e3af89e4071b7119e6fc4c9b7ff831cab47cac1e866dc4b72d6b7f2e79f234->leave($__internal_c8e3af89e4071b7119e6fc4c9b7ff831cab47cac1e866dc4b72d6b7f2e79f234_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_efadf231e81dd665ed4a3da058397abd7284bb6ea13a0447169e19f3862c1026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efadf231e81dd665ed4a3da058397abd7284bb6ea13a0447169e19f3862c1026->enter($__internal_efadf231e81dd665ed4a3da058397abd7284bb6ea13a0447169e19f3862c1026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_efadf231e81dd665ed4a3da058397abd7284bb6ea13a0447169e19f3862c1026->leave($__internal_efadf231e81dd665ed4a3da058397abd7284bb6ea13a0447169e19f3862c1026_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0db17aa60b22721d13468983412da3ffef9d476bb226c7758378a18c72de8cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db17aa60b22721d13468983412da3ffef9d476bb226c7758378a18c72de8cc2->enter($__internal_0db17aa60b22721d13468983412da3ffef9d476bb226c7758378a18c72de8cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_f644eee4b8fb12745f0f99acc5c24cdac8130640c01e13a34b4b3ba49a244cd6 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_f644eee4b8fb12745f0f99acc5c24cdac8130640c01e13a34b4b3ba49a244cd6)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_f644eee4b8fb12745f0f99acc5c24cdac8130640c01e13a34b4b3ba49a244cd6);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_0db17aa60b22721d13468983412da3ffef9d476bb226c7758378a18c72de8cc2->leave($__internal_0db17aa60b22721d13468983412da3ffef9d476bb226c7758378a18c72de8cc2_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_c3b8ea6b92b3e05299ac44a7b47189f048e92f9b081be66b959e20c38ef95b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b8ea6b92b3e05299ac44a7b47189f048e92f9b081be66b959e20c38ef95b7d->enter($__internal_c3b8ea6b92b3e05299ac44a7b47189f048e92f9b081be66b959e20c38ef95b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_c3b8ea6b92b3e05299ac44a7b47189f048e92f9b081be66b959e20c38ef95b7d->leave($__internal_c3b8ea6b92b3e05299ac44a7b47189f048e92f9b081be66b959e20c38ef95b7d_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_ea54c6c1f8ee621d3653c0abc6ff56f60495619a05e622974772d7e4052b0c06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea54c6c1f8ee621d3653c0abc6ff56f60495619a05e622974772d7e4052b0c06->enter($__internal_ea54c6c1f8ee621d3653c0abc6ff56f60495619a05e622974772d7e4052b0c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_ea54c6c1f8ee621d3653c0abc6ff56f60495619a05e622974772d7e4052b0c06->leave($__internal_ea54c6c1f8ee621d3653c0abc6ff56f60495619a05e622974772d7e4052b0c06_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_811d148ef5c0841690e3e024c9089b6d23d3a6f774cb4af95d3c922b71a40365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811d148ef5c0841690e3e024c9089b6d23d3a6f774cb4af95d3c922b71a40365->enter($__internal_811d148ef5c0841690e3e024c9089b6d23d3a6f774cb4af95d3c922b71a40365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_811d148ef5c0841690e3e024c9089b6d23d3a6f774cb4af95d3c922b71a40365->leave($__internal_811d148ef5c0841690e3e024c9089b6d23d3a6f774cb4af95d3c922b71a40365_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a553e544e2aef8859ff42f2785fc7b55f88f524ea5f6bc34bf0d46f73ad4dbcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a553e544e2aef8859ff42f2785fc7b55f88f524ea5f6bc34bf0d46f73ad4dbcb->enter($__internal_a553e544e2aef8859ff42f2785fc7b55f88f524ea5f6bc34bf0d46f73ad4dbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_a553e544e2aef8859ff42f2785fc7b55f88f524ea5f6bc34bf0d46f73ad4dbcb->leave($__internal_a553e544e2aef8859ff42f2785fc7b55f88f524ea5f6bc34bf0d46f73ad4dbcb_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_25cdf72666ec35898ca5fa988e9b646776588cf9557e7f747dd09aee0c392314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cdf72666ec35898ca5fa988e9b646776588cf9557e7f747dd09aee0c392314->enter($__internal_25cdf72666ec35898ca5fa988e9b646776588cf9557e7f747dd09aee0c392314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_25cdf72666ec35898ca5fa988e9b646776588cf9557e7f747dd09aee0c392314->leave($__internal_25cdf72666ec35898ca5fa988e9b646776588cf9557e7f747dd09aee0c392314_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_1893ab47cb4e96c515a1c6f4db4f242e14d3542ec99098245d1c5a9804a1b013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1893ab47cb4e96c515a1c6f4db4f242e14d3542ec99098245d1c5a9804a1b013->enter($__internal_1893ab47cb4e96c515a1c6f4db4f242e14d3542ec99098245d1c5a9804a1b013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_1893ab47cb4e96c515a1c6f4db4f242e14d3542ec99098245d1c5a9804a1b013->leave($__internal_1893ab47cb4e96c515a1c6f4db4f242e14d3542ec99098245d1c5a9804a1b013_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_4195b8ba772164e4de0b6c790a1691d99b629043760221157c0a9172e44d9df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4195b8ba772164e4de0b6c790a1691d99b629043760221157c0a9172e44d9df8->enter($__internal_4195b8ba772164e4de0b6c790a1691d99b629043760221157c0a9172e44d9df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_4195b8ba772164e4de0b6c790a1691d99b629043760221157c0a9172e44d9df8->leave($__internal_4195b8ba772164e4de0b6c790a1691d99b629043760221157c0a9172e44d9df8_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_9476c320404239a95e3eb6dfb512deb635cf5449fadaf772e4f769582a48f7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9476c320404239a95e3eb6dfb512deb635cf5449fadaf772e4f769582a48f7c7->enter($__internal_9476c320404239a95e3eb6dfb512deb635cf5449fadaf772e4f769582a48f7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_9476c320404239a95e3eb6dfb512deb635cf5449fadaf772e4f769582a48f7c7->leave($__internal_9476c320404239a95e3eb6dfb512deb635cf5449fadaf772e4f769582a48f7c7_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fa49263a31ee60dd3ac452b04a3f098716c7b2caa03c964c0821ce162d73cc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa49263a31ee60dd3ac452b04a3f098716c7b2caa03c964c0821ce162d73cc85->enter($__internal_fa49263a31ee60dd3ac452b04a3f098716c7b2caa03c964c0821ce162d73cc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_fa49263a31ee60dd3ac452b04a3f098716c7b2caa03c964c0821ce162d73cc85->leave($__internal_fa49263a31ee60dd3ac452b04a3f098716c7b2caa03c964c0821ce162d73cc85_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_1163970cd8e5952256bb8626586a04f84d52dbd6ddc7b9bbbd5c7e534a2d952e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1163970cd8e5952256bb8626586a04f84d52dbd6ddc7b9bbbd5c7e534a2d952e->enter($__internal_1163970cd8e5952256bb8626586a04f84d52dbd6ddc7b9bbbd5c7e534a2d952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_1163970cd8e5952256bb8626586a04f84d52dbd6ddc7b9bbbd5c7e534a2d952e->leave($__internal_1163970cd8e5952256bb8626586a04f84d52dbd6ddc7b9bbbd5c7e534a2d952e_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_3fc1cca846702b3b632c8249218bfd0c59986f7a2964ae07019578ef3776d413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc1cca846702b3b632c8249218bfd0c59986f7a2964ae07019578ef3776d413->enter($__internal_3fc1cca846702b3b632c8249218bfd0c59986f7a2964ae07019578ef3776d413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3fc1cca846702b3b632c8249218bfd0c59986f7a2964ae07019578ef3776d413->leave($__internal_3fc1cca846702b3b632c8249218bfd0c59986f7a2964ae07019578ef3776d413_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_f043d2427cce83a2106d787a047f31b72431d72327e174b97c067ba3a18e5b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f043d2427cce83a2106d787a047f31b72431d72327e174b97c067ba3a18e5b66->enter($__internal_f043d2427cce83a2106d787a047f31b72431d72327e174b97c067ba3a18e5b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_f043d2427cce83a2106d787a047f31b72431d72327e174b97c067ba3a18e5b66->leave($__internal_f043d2427cce83a2106d787a047f31b72431d72327e174b97c067ba3a18e5b66_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_15186d13f55d3f75a0b53108c1a4882df8dbc56954eceb00f9630d23fac7b656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15186d13f55d3f75a0b53108c1a4882df8dbc56954eceb00f9630d23fac7b656->enter($__internal_15186d13f55d3f75a0b53108c1a4882df8dbc56954eceb00f9630d23fac7b656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_15186d13f55d3f75a0b53108c1a4882df8dbc56954eceb00f9630d23fac7b656->leave($__internal_15186d13f55d3f75a0b53108c1a4882df8dbc56954eceb00f9630d23fac7b656_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_aeb948fcd9e0457ebace06d933bc7089f139e06286494be957251e075818fb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb948fcd9e0457ebace06d933bc7089f139e06286494be957251e075818fb91->enter($__internal_aeb948fcd9e0457ebace06d933bc7089f139e06286494be957251e075818fb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_aeb948fcd9e0457ebace06d933bc7089f139e06286494be957251e075818fb91->leave($__internal_aeb948fcd9e0457ebace06d933bc7089f139e06286494be957251e075818fb91_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_4de3ae03b31d53430a8ed1b3c569b6743b1257ce7a2f077ef39be9531d68665f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de3ae03b31d53430a8ed1b3c569b6743b1257ce7a2f077ef39be9531d68665f->enter($__internal_4de3ae03b31d53430a8ed1b3c569b6743b1257ce7a2f077ef39be9531d68665f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4de3ae03b31d53430a8ed1b3c569b6743b1257ce7a2f077ef39be9531d68665f->leave($__internal_4de3ae03b31d53430a8ed1b3c569b6743b1257ce7a2f077ef39be9531d68665f_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1375 => 400,  1373 => 399,  1368 => 398,  1366 => 397,  1361 => 396,  1359 => 395,  1357 => 394,  1353 => 393,  1347 => 392,  1340 => 389,  1331 => 388,  1325 => 387,  1318 => 384,  1312 => 383,  1306 => 382,  1299 => 379,  1295 => 378,  1291 => 377,  1285 => 376,  1279 => 375,  1268 => 371,  1264 => 370,  1258 => 369,  1247 => 362,  1245 => 361,  1242 => 358,  1239 => 356,  1237 => 355,  1235 => 354,  1233 => 353,  1231 => 352,  1224 => 348,  1222 => 347,  1218 => 346,  1212 => 345,  1204 => 341,  1196 => 339,  1192 => 338,  1190 => 337,  1188 => 336,  1182 => 335,  1175 => 332,  1172 => 330,  1170 => 329,  1164 => 328,  1154 => 324,  1152 => 323,  1125 => 322,  1122 => 320,  1119 => 318,  1117 => 317,  1115 => 316,  1113 => 315,  1107 => 314,  1100 => 311,  1098 => 310,  1096 => 309,  1090 => 308,  1083 => 303,  1077 => 302,  1070 => 299,  1068 => 298,  1066 => 297,  1060 => 296,  1053 => 293,  1051 => 292,  1049 => 291,  1047 => 290,  1045 => 289,  1039 => 288,  1032 => 285,  1026 => 280,  1015 => 276,  991 => 272,  987 => 269,  984 => 266,  983 => 265,  982 => 264,  980 => 263,  978 => 262,  975 => 260,  973 => 259,  970 => 257,  968 => 256,  966 => 255,  960 => 254,  953 => 249,  951 => 248,  945 => 247,  938 => 244,  936 => 243,  930 => 242,  923 => 239,  921 => 238,  915 => 237,  908 => 234,  906 => 233,  900 => 232,  887 => 229,  883 => 226,  880 => 223,  879 => 222,  878 => 221,  876 => 220,  874 => 219,  868 => 218,  861 => 215,  859 => 214,  853 => 213,  846 => 210,  844 => 209,  838 => 208,  831 => 205,  829 => 204,  823 => 203,  816 => 200,  814 => 199,  808 => 198,  800 => 195,  798 => 194,  792 => 193,  785 => 190,  783 => 189,  777 => 188,  770 => 185,  768 => 184,  762 => 183,  755 => 180,  749 => 179,  742 => 176,  740 => 175,  734 => 174,  727 => 171,  725 => 170,  719 => 168,  711 => 164,  707 => 163,  703 => 160,  697 => 159,  691 => 158,  685 => 157,  679 => 156,  673 => 155,  667 => 154,  661 => 153,  656 => 149,  650 => 148,  644 => 147,  638 => 146,  632 => 145,  626 => 144,  620 => 143,  614 => 142,  608 => 139,  606 => 138,  602 => 137,  599 => 135,  597 => 134,  591 => 133,  583 => 129,  573 => 128,  568 => 127,  566 => 126,  563 => 124,  561 => 123,  555 => 122,  547 => 118,  545 => 116,  544 => 115,  543 => 114,  542 => 113,  538 => 112,  535 => 110,  533 => 109,  527 => 108,  519 => 104,  517 => 103,  515 => 102,  513 => 101,  511 => 100,  507 => 99,  504 => 97,  502 => 96,  496 => 95,  479 => 92,  473 => 91,  456 => 88,  450 => 87,  412 => 82,  409 => 80,  407 => 79,  405 => 78,  400 => 77,  398 => 76,  381 => 75,  375 => 74,  368 => 71,  366 => 70,  364 => 69,  358 => 66,  356 => 65,  354 => 64,  352 => 63,  350 => 62,  341 => 60,  339 => 59,  332 => 58,  329 => 56,  327 => 55,  321 => 54,  314 => 51,  308 => 49,  306 => 48,  302 => 47,  298 => 46,  292 => 45,  284 => 41,  281 => 39,  279 => 38,  273 => 37,  262 => 34,  256 => 33,  249 => 30,  246 => 28,  244 => 27,  238 => 26,  231 => 23,  229 => 22,  227 => 21,  224 => 19,  222 => 18,  218 => 17,  212 => 16,  195 => 13,  193 => 12,  187 => 11,  179 => 7,  176 => 5,  174 => 4,  168 => 3,  161 => 392,  159 => 387,  157 => 382,  155 => 375,  153 => 369,  150 => 366,  148 => 345,  146 => 335,  144 => 328,  142 => 314,  140 => 308,  138 => 302,  136 => 296,  134 => 288,  132 => 280,  130 => 276,  128 => 254,  126 => 247,  124 => 242,  122 => 237,  120 => 232,  118 => 218,  116 => 213,  114 => 208,  112 => 203,  110 => 198,  108 => 193,  106 => 188,  104 => 183,  102 => 179,  100 => 174,  98 => 168,  96 => 133,  94 => 122,  92 => 108,  90 => 95,  88 => 91,  86 => 87,  84 => 74,  82 => 54,  80 => 45,  78 => 37,  76 => 33,  74 => 26,  72 => 16,  70 => 11,  68 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/home/floriane/Dashboard/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
