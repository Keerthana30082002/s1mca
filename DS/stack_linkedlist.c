#include<stdio.h>
#include<stdlib.h>

struct node {
    int d;
    struct node *next;
}*head,*temp,*cur;

int max,c=0;


void push(int v)
{
    struct node *newnode=(struct node *)malloc(sizeof(struct node));
    newnode->d=v;
    newnode->next=NULL;
    if(head==NULL) 
    {
            head=newnode;
            c++;
    }
    else if(c==max)
    {
        printf("\nSTACK OVERFLOW!!!\n");
    }
    else
    {
        temp=head;
        while(temp->next!=NULL)
            temp=temp->next;
        temp->next=newnode;
        c++;

    }
    
}


int pop()
{
    if(c==0)
        printf("\nSTACK EMPTY!!!\n");
    else
    {
        temp=head;
        while(temp->next!=NULL)
        {
            cur=temp;
            temp=temp->next;
        }
        cur->next=NULL;
        c--;
        printf("\n%d is deleted ",temp->d);
        return temp->d;
    }
}


void display(){
    temp=head;
    while(temp!=NULL)
    {
        printf("\n%d ",temp->d);
        temp=temp->next;
    }
}

void main()
{
    printf("Enter size of stack: ");
    scanf("%d",&max);
    int ch,n;
    do
    {
        printf("\n1: Push\n2: pop\n3:Display\n4:Exit\nEnter your choice: ");
        scanf("%d",&ch);
        switch (ch)
        {
        case 1:
            printf("Enter value to push: ");
            scanf("%d",&n);
            push(n);
            break;
        case 2:
            int v=pop();break;
        case 3:
            printf("Stack: ");
            display();break;
        }
    } while (ch<4);
    
}
