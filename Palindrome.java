public class Palindrome{
public static void main(String args[]){
int num=123;
int rev=0;
int temp=num;
while(num>0){
rev=rev*10;
rev=rev+num%10;
num=num/10;
}
if(rev==temp){
System.out.println(temp+" "+"is palindrome");
}
else{
System.out.println(temp+" "+ "is not palindrome");
}
}
}
