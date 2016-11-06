
 /**
     * Registers the status of foo's universe
     *
     * Summaries for methods should use 3rd person declarative rather
     * than 2nd person imperative, beginning with a verb phrase.
     *
     * Summaries should add description beyond the method's name. The
     * best method names are "self-documenting", meaning they tell you
     * basically what the method does.  If the summary merely repeats
     * the method name in sentence form, it is not providing more
     * information.
     *
     * Summary Examples:
     *   + Sets the label              (preferred)
     *   + Set the label               (avoid)
     *   + This method sets the label  (avoid)
     *
     * Below are the tags commonly used for methods.  A @param tag is
     * required for each parameter the method has.  The @return
     * and @access tags are mandatory.  The @throws tag is required if
     * the method uses exceptions.  @static is required if the method can
     * be called statically.  The remainder should only be used when
     * necessary.  Please use them in the order they appear here.
     * phpDocumentor has several other tags available, feel free to use
     * them.
     *
     * The @param tag contains the data type, then the parameter's
     * name, followed by a description.  By convention, the first noun in
     * the description is the data type of the parameter.  Articles like
     * "a", "an", and  "the" can precede the noun.  The descriptions
     * should start with a phrase.  If further description is necessary,
     * follow with sentences.  Having two spaces between the name and the
     * description aids readability.
     *
     * When writing a phrase, do not capitalize and do not end with a
     * period:
     *   + the string to be tested
     *
     * When writing a phrase followed by a sentence, do not capitalize the
     * phrase, but end it with a period to distinguish it from the start
     * of the next sentence:
     *   + the string to be tested. Must use UTF-8 encoding.
     *
     * Return tags should contain the data type then a description of
     * the data returned.  The data type can be any of PHP's data types
     * (int, float, bool, string, array, object, resource, mixed)
     * and should contain the type primarily returned.  For example, if
     * a method returns an object when things work correctly but false
     * when an error happens, say 'object' rather than 'mixed.'  Use
     * 'void' if nothing is returned.
     *
     * Here's an example of how to format examples:
     * <code>
     * require_once 'Net/Sample.php';
     *
     * $s = new Net_Sample();
     * if (PEAR::isError($s)) {
     *     echo $s->getMessage() . "\n";
     * }
     * </code>
     *
     * Here is an example for non-php example or sample:
     * <samp>
     * pear install net_sample
     * </samp>
     *