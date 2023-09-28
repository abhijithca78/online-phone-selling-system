using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Omss
{
    #region Admin
    public class Admin
    {
        #region Member Variables
        protected int _id;
        protected string _firstname;
        protected string _lastname;
        protected string _email;
        protected unknown _phone;
        protected string _password;
        protected long _admin_image;
        #endregion
        #region Constructors
        public Admin() { }
        public Admin(string firstname, string lastname, string email, unknown phone, string password, long admin_image)
        {
            this._firstname=firstname;
            this._lastname=lastname;
            this._email=email;
            this._phone=phone;
            this._password=password;
            this._admin_image=admin_image;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Firstname
        {
            get {return _firstname;}
            set {_firstname=value;}
        }
        public virtual string Lastname
        {
            get {return _lastname;}
            set {_lastname=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual unknown Phone
        {
            get {return _phone;}
            set {_phone=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual long Admin_image
        {
            get {return _admin_image;}
            set {_admin_image=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Omss
{
    #region Cart
    public class Cart
    {
        #region Member Variables
        protected int _phone_id;
        protected unknown _time;
        protected int _qty;
        protected int _userid;
        #endregion
        #region Constructors
        public Cart() { }
        public Cart(int phone_id, unknown time, int qty, int userid)
        {
            this._phone_id=phone_id;
            this._time=time;
            this._qty=qty;
            this._userid=userid;
        }
        #endregion
        #region Public Properties
        public virtual int Phone_id
        {
            get {return _phone_id;}
            set {_phone_id=value;}
        }
        public virtual unknown Time
        {
            get {return _time;}
            set {_time=value;}
        }
        public virtual int Qty
        {
            get {return _qty;}
            set {_qty=value;}
        }
        public virtual int Userid
        {
            get {return _userid;}
            set {_userid=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Omss
{
    #region My_orders
    public class My_orders
    {
        #region Member Variables
        protected int _phone_id;
        protected unknown _time;
        protected int _qty;
        protected int _userid;
        #endregion
        #region Constructors
        public My_orders() { }
        public My_orders(int phone_id, unknown time, int qty, int userid)
        {
            this._phone_id=phone_id;
            this._time=time;
            this._qty=qty;
            this._userid=userid;
        }
        #endregion
        #region Public Properties
        public virtual int Phone_id
        {
            get {return _phone_id;}
            set {_phone_id=value;}
        }
        public virtual unknown Time
        {
            get {return _time;}
            set {_time=value;}
        }
        public virtual int Qty
        {
            get {return _qty;}
            set {_qty=value;}
        }
        public virtual int Userid
        {
            get {return _userid;}
            set {_userid=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Omss
{
    #region Orders
    public class Orders
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected int _amount;
        protected string _pay_id;
        protected string _pay_status;
        protected DateTime _date_added;
        protected int _uid;
        #endregion
        #region Constructors
        public Orders() { }
        public Orders(string name, int amount, string pay_id, string pay_status, DateTime date_added, int uid)
        {
            this._name=name;
            this._amount=amount;
            this._pay_id=pay_id;
            this._pay_status=pay_status;
            this._date_added=date_added;
            this._uid=uid;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual int Amount
        {
            get {return _amount;}
            set {_amount=value;}
        }
        public virtual string Pay_id
        {
            get {return _pay_id;}
            set {_pay_id=value;}
        }
        public virtual string Pay_status
        {
            get {return _pay_status;}
            set {_pay_status=value;}
        }
        public virtual DateTime Date_added
        {
            get {return _date_added;}
            set {_date_added=value;}
        }
        public virtual int Uid
        {
            get {return _uid;}
            set {_uid=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Omss
{
    #region Products
    public class Products
    {
        #region Member Variables
        protected int _phoneid;
        protected string _phone_name;
        protected int _phone_price;
        protected int _phone_qty;
        protected string _company_name;
        protected string _category;
        protected string _phone_image;
        protected string _description;
        protected int _user_seller_id;
        #endregion
        #region Constructors
        public Products() { }
        public Products(string phone_name, int phone_price, int phone_qty, string company_name, string category, string phone_image, string description, int user_seller_id)
        {
            this._phone_name=phone_name;
            this._phone_price=phone_price;
            this._phone_qty=phone_qty;
            this._company_name=company_name;
            this._category=category;
            this._phone_image=phone_image;
            this._description=description;
            this._user_seller_id=user_seller_id;
        }
        #endregion
        #region Public Properties
        public virtual int Phoneid
        {
            get {return _phoneid;}
            set {_phoneid=value;}
        }
        public virtual string Phone_name
        {
            get {return _phone_name;}
            set {_phone_name=value;}
        }
        public virtual int Phone_price
        {
            get {return _phone_price;}
            set {_phone_price=value;}
        }
        public virtual int Phone_qty
        {
            get {return _phone_qty;}
            set {_phone_qty=value;}
        }
        public virtual string Company_name
        {
            get {return _company_name;}
            set {_company_name=value;}
        }
        public virtual string Category
        {
            get {return _category;}
            set {_category=value;}
        }
        public virtual string Phone_image
        {
            get {return _phone_image;}
            set {_phone_image=value;}
        }
        public virtual string Description
        {
            get {return _description;}
            set {_description=value;}
        }
        public virtual int User_seller_id
        {
            get {return _user_seller_id;}
            set {_user_seller_id=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Omss
{
    #region Razorpay
    public class Razorpay
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected int _amount;
        protected string _pay_id;
        protected string _pay_status;
        protected DateTime _date_added;
        protected int _uid;
        #endregion
        #region Constructors
        public Razorpay() { }
        public Razorpay(string name, int amount, string pay_id, string pay_status, DateTime date_added, int uid)
        {
            this._name=name;
            this._amount=amount;
            this._pay_id=pay_id;
            this._pay_status=pay_status;
            this._date_added=date_added;
            this._uid=uid;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual int Amount
        {
            get {return _amount;}
            set {_amount=value;}
        }
        public virtual string Pay_id
        {
            get {return _pay_id;}
            set {_pay_id=value;}
        }
        public virtual string Pay_status
        {
            get {return _pay_status;}
            set {_pay_status=value;}
        }
        public virtual DateTime Date_added
        {
            get {return _date_added;}
            set {_date_added=value;}
        }
        public virtual int Uid
        {
            get {return _uid;}
            set {_uid=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Omss
{
    #region Signup
    public class Signup
    {
        #region Member Variables
        protected int _id;
        protected string _firstname;
        protected string _lastname;
        protected string _email;
        protected unknown _phone;
        protected unknown _date;
        protected unknown _gender;
        protected string _username;
        protected string _password;
        protected string _verify_token;
        protected string _image;
        #endregion
        #region Constructors
        public Signup() { }
        public Signup(string firstname, string lastname, string email, unknown phone, unknown date, unknown gender, string username, string password, string verify_token, string image)
        {
            this._firstname=firstname;
            this._lastname=lastname;
            this._email=email;
            this._phone=phone;
            this._date=date;
            this._gender=gender;
            this._username=username;
            this._password=password;
            this._verify_token=verify_token;
            this._image=image;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Firstname
        {
            get {return _firstname;}
            set {_firstname=value;}
        }
        public virtual string Lastname
        {
            get {return _lastname;}
            set {_lastname=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual unknown Phone
        {
            get {return _phone;}
            set {_phone=value;}
        }
        public virtual unknown Date
        {
            get {return _date;}
            set {_date=value;}
        }
        public virtual unknown Gender
        {
            get {return _gender;}
            set {_gender=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Verify_token
        {
            get {return _verify_token;}
            set {_verify_token=value;}
        }
        public virtual string Image
        {
            get {return _image;}
            set {_image=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Omss
{
    #region Tempcart
    public class Tempcart
    {
        #region Member Variables
        protected int _userid;
        protected int _phone_id;
        protected int _phone_qty;
        #endregion
        #region Constructors
        public Tempcart() { }
        public Tempcart(int userid, int phone_id, int phone_qty)
        {
            this._userid=userid;
            this._phone_id=phone_id;
            this._phone_qty=phone_qty;
        }
        #endregion
        #region Public Properties
        public virtual int Userid
        {
            get {return _userid;}
            set {_userid=value;}
        }
        public virtual int Phone_id
        {
            get {return _phone_id;}
            set {_phone_id=value;}
        }
        public virtual int Phone_qty
        {
            get {return _phone_qty;}
            set {_phone_qty=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Omss
{
    #region User_selled_phones
    public class User_selled_phones
    {
        #region Member Variables
        protected int _phone_id;
        protected string _phone_name;
        protected int _phone_price;
        protected int _phone_qty;
        protected string _company_name;
        protected string _category;
        protected string _phone_image;
        protected string _description;
        protected int _uid;
        #endregion
        #region Constructors
        public User_selled_phones() { }
        public User_selled_phones(string phone_name, int phone_price, int phone_qty, string company_name, string category, string phone_image, string description, int uid)
        {
            this._phone_name=phone_name;
            this._phone_price=phone_price;
            this._phone_qty=phone_qty;
            this._company_name=company_name;
            this._category=category;
            this._phone_image=phone_image;
            this._description=description;
            this._uid=uid;
        }
        #endregion
        #region Public Properties
        public virtual int Phone_id
        {
            get {return _phone_id;}
            set {_phone_id=value;}
        }
        public virtual string Phone_name
        {
            get {return _phone_name;}
            set {_phone_name=value;}
        }
        public virtual int Phone_price
        {
            get {return _phone_price;}
            set {_phone_price=value;}
        }
        public virtual int Phone_qty
        {
            get {return _phone_qty;}
            set {_phone_qty=value;}
        }
        public virtual string Company_name
        {
            get {return _company_name;}
            set {_company_name=value;}
        }
        public virtual string Category
        {
            get {return _category;}
            set {_category=value;}
        }
        public virtual string Phone_image
        {
            get {return _phone_image;}
            set {_phone_image=value;}
        }
        public virtual string Description
        {
            get {return _description;}
            set {_description=value;}
        }
        public virtual int Uid
        {
            get {return _uid;}
            set {_uid=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Omss
{
    #region Wish_list
    public class Wish_list
    {
        #region Member Variables
        protected int _phone_id;
        protected int _uid;
        #endregion
        #region Constructors
        public Wish_list() { }
        public Wish_list(int phone_id, int uid)
        {
            this._phone_id=phone_id;
            this._uid=uid;
        }
        #endregion
        #region Public Properties
        public virtual int Phone_id
        {
            get {return _phone_id;}
            set {_phone_id=value;}
        }
        public virtual int Uid
        {
            get {return _uid;}
            set {_uid=value;}
        }
        #endregion
    }
    #endregion
}