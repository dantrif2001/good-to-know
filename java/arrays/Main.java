/**
 * Purpose of this class is to show some interesting topics from the Java Arrays
 * It is not only simple way to learn Array but some small things that we should know about them
 * and about deep things that we will encounter almost daily in our software development work.
 *
 * Please refer to code comments because this way might be helpful for some people as they will be able to read
 * what they are following within the code.
 *
 * When I have written this quick tutorial I assumed that there is already a basic understanding of programming in
 * general and Java programming.
 */
public class Main {

    public static void main(String[] args) {

        /**
         * We declare an array of integers.
         * new int[10] - we specify the number of the array elements that the variable will hold
         */
        int[] firstArrayExample = new int[10];

        /**
         * As all arrays in Java start to count at position 0, is indexed
         * If we want to allocate a value to position 50 we should consider writing:
         */
        firstArrayExample[5] = 50;

        System.out.println("------ firstArrayExample ------");

        /**
         * If we try to access array at position 5 it will display 50, because we defined the value on that position
         */
        System.out.println(firstArrayExample[5]);

        /**
         * If we'll try to access other key by printing its value, it will display 0 because everything in Java
         * not explicitly set to something, is initialized to a "zero" value (or null, in some cases).
         * Here's the list:
         * - For references (anything that holds an object, including Strings(will explain why later)): null
         * - For int/short/byte : 0
         * - For float/double : 0
         * - For booleans : false
         *
         * This is the reason for which other undefined keys will hold the value of 0 ("Zero")
         *
         * Fro my point of view this is very important to know when doing development and working with arrays
         * or lists of number. When doing validations, knowing this and taking care will probably help avoiding
         * bugs and time lost on investigations.
         */
        System.out.println(firstArrayExample[2]);
        System.out.println(firstArrayExample[3]);

        /**
         * Another way to define an array, assuming we already know the array keys
         * Is to specify them in the order we want using curly braces { for start and } for end, while separating
         * them using a comma (,)
         */
        int[] anotherIntArrayExample = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};

        System.out.println("------ anotherIntArrayExample ------");

        /**
         * Same rule with the key, starting from 0, check the example..
         */
        System.out.println(anotherIntArrayExample[0]);
        System.out.println(anotherIntArrayExample[6]);
        System.out.println(anotherIntArrayExample[8]);

    }
}
