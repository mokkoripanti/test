
public class Test {
   public static void main(String[]args){
	   Person taro=new Person();
	   taro.name="山田太郎";
	   taro.age=20;
	   taro.PhoneNumber="090-0000-0000";
	   taro.address="東京";
	   System.out.println(taro.name);
	   System.out.println(taro.age);
	   System.out.println(taro.PhoneNumber);
	   System.out.println (taro.address);
	   taro.talk();
	   taro.walk();
	   taro.run();



	   Person jiro=new Person();
	   taro.name="木村次郎";
	   taro.age=18;
	   taro.PhoneNumber="050-0000-0000";
	   taro.address="神奈川";
	   System.out.println(taro.name);
	   System.out.println(taro.age);
	   System.out.println(taro.PhoneNumber);
	   System.out.println (taro.address);
	   taro.talk();
	   taro.walk();
	   taro.run();



	   Person hanako=new Person();
	   taro.name="鈴木花子";
	   taro.age=16;
	   taro.PhoneNumber="070-0000-0000";
	   taro.address="大阪";
	   System.out.println(taro.name);
	   System.out.println(taro.age);
	   System.out.println(taro.PhoneNumber);
	   System.out.println (taro.address);
	   taro.talk();
	   taro.walk();
	   taro.run();



	   Person mineo=new Person();
	   taro.name="峯尾知克";
	   taro.age=19;
	   taro.PhoneNumber="080-0000-0000";
	   taro.address="東京";
	   System.out.println(taro.name);
	   System.out.println(taro.age);
	   System.out.println(taro.PhoneNumber);
	   System.out.println (taro.address);
	   taro.talk();
	   taro.walk();
	   taro.run();

	   Person aibo=new Person();
	   aibo.name="aibo";
	   System.out.println(aibo.name);
	   aibo.talk();
	   aibo.walk();
	   aibo.run();

	   Person asimo=new Person();
	   aibo.name="asimo";
	   System.out.println(aibo.name);
	   aibo.talk();
	   aibo.walk();
	   aibo.run();

	   Person pepper=new Person();
	   aibo.name="pepper";
	   System.out.println(aibo.name);
	   aibo.talk();
	   aibo.walk();
	   aibo.run();
   }
}


